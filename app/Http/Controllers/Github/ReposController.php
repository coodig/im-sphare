<?php

namespace App\Http\Controllers\Github;

use App\Http\Controllers\Controller;
use App\Models\GithubRepo;
use App\Models\GitHubToken;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;

use Illuminate\Support\Facades\Auth;

class ReposController extends Controller
{

    public function fetchRepos($username, Request $request)
    {
        $githubTokenModel = GitHubToken::where('user_id', Auth::id())->first();

        if (!$githubTokenModel) {
            return back()->with('error', 'GitHub token not found for this user.');
        }

        $token = $githubTokenModel->github_token;
        $response = Http::withToken($token)->get('https://api.github.com/user/repos');

        if ($response->successful()) {
            $repos = $response->json();

            foreach ($repos as $repo) {
                GithubRepo::updateOrCreate(
                    [
                        // 'full_name'=>$repo['full_name'],
                        'repo_id' => $repo['id'],
                        'user_id' => Auth::id(),

                    ],
                    [
                        'name' => $repo['name'],
                        //         'name' => $repo['name'],
                        'full_name' => $repo['full_name'],
                        'description' => $repo['description'] ?? null,
                        'html_url' => $repo['html_url'],
                        'clone_url' => $repo['clone_url'],
                        'default_branch' => $repo['default_branch'] ?? 'main',
                        'forks' => $repo['forks_count'] ?? 0,
                        'watchers' => $repo['watchers_count'] ?? 0,
                        'pushed_at' => $repo['pushed_at'],
                        'created_at_github' => $repo['created_at'],
                        'is_private' => $repo['private'] ? 1 : 0,
                    ]
                );
            }

            // $savedRepos = GithubRepo::where('user_id', Auth::user()->id)->latest('pushed_at');

            // dd($repos);

            // Set the page number, defaulting to 1 if not provided in the request
            // $page = $request->input('page', 1);

            // // Example: fetch commits for the first repo in the list

            // if (!empty($repos)) {
            //     $firstRepo = $repos[0];
            //     $owner = $firstRepo['owner']['login'];
            //     $repoName = $firstRepo['name'];
            //     $commitResponse = Http::withToken($token)->get("https://api.github.com/repos/$owner/$repoName/commits", ['per_page' => 100, 'page' => $page]);
            //     $commits = $commitResponse->json();
            //     dd($commits);
            // }

            // $page = $request->input('page', 1);

            // $allCommits = [];

            // if (!empty($repos)) {
                // foreach ($repos as $repo) {
                    // $owner = $repo['owner']['login'];
                    // $repoName = $repo['name'];

                    // $commitResponse = Http::withToken($token)->get("https://api.github.com/repos/$owner/$repoName/commits", [
                        // 'per_page' => 200,
                        // 'page' => $page
                    // ]);

                    // $commits = $commitResponse->json('message');
                    // if ($commitResponse->successful()) {
//
                        // Repo name ke saath commits store karna accha hoga
                        // $allCommits[$repoName] = $commits;
                    // }
                // }

                // dd($commits); // sabhi repos ke commits ek array me aa jayenge
            // }


            $savedRepos = GithubRepo::where('user_id', Auth::id())->latest('pushed_at')->orderBy('id')->simplePaginate(10);
            return view('github.repos.index', compact('savedRepos'));
        }
    }
}
