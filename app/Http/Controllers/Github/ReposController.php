<?php

namespace App\Http\Controllers\Github;

use App\Http\Controllers\Controller;
use App\Models\GithubRepo;
use App\Models\GitHubToken;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;

class ReposController extends Controller
{
    public function fetchRepos($username, Request $request)
    {
        $user = Auth::user();

        // 1. Get Token
        $githubTokenModel = GitHubToken::where('user_id', $user->id)->first();

        if (!$githubTokenModel) {
            return back()->with('error', 'GitHub token not found for this user.');
        }

        $token = $githubTokenModel->github_token;

        $response = Http::withToken($token)->get('https://api.github.com/user/repos?sort=updated&per_page=100');

        if ($response->successful()) {
            $repos = $response->json();

            foreach ($repos as $repo) {
                GithubRepo::updateOrCreate(
                    [
                        'user_id'   => $user->id,
                        'full_name' => $repo['full_name'], // Unique Identifier
                    ],
                    [
                        'name'              => $repo['name'],
                        'owner'             => $repo['owner']['login'],
                        'description'       => $repo['description'] ?? null,
                        'html_url'          => $repo['html_url'],
                        'clone_url'         => $repo['clone_url'],
                        'default_branch'    => $repo['default_branch'] ?? 'main',
                        'forks'             => $repo['forks_count'] ?? 0,
                        'watchers'          => $repo['watchers_count'] ?? 0,
                        'pushed_at'         => date('Y-m-d H:i:s', strtotime($repo['pushed_at'])),
                        'created_at_github' => date('Y-m-d H:i:s', strtotime($repo['created_at'])),
                        'is_private'        => $repo['private'] ? 1 : 0,
                    ]
                );
            }
        }


        $savedRepos = GithubRepo::where('user_id', $user->id)
            ->latest('pushed_at')
            ->paginate(15);

        return view('github.repos.index', compact('savedRepos'));
    }
}
