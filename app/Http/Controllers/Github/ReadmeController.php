<?php

namespace App\Http\Controllers\Github;

use App\Http\Controllers\Controller;
use App\Models\GithubReadmeImage;
use App\Models\GitHubToken;
use App\Models\GithubRepo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Parsedown;

class ReadmeController extends Controller
{
    public function repoDetail($username, $owner, $repo, Request $request)
    {
        $githubTokenModel = GitHubToken::where('user_id', Auth::id())->first();

        if (!$githubTokenModel) {
            return redirect()->route('github.form.show')->with('error', 'Please enter your github token');
        }

        $token = $githubTokenModel->github_token;

        // Repo details from GitHub API
        $repoDetails = Http::withToken($token)
            ->get("https://api.github.com/repos/$owner/$repo")
            ->json();

        // Local DB repo_id
        $repoModel = GithubRepo::where('full_name', $repoDetails['full_name'])->first();

        $readmeResponse = Http::withToken($token)->get("https://api.github.com/repos/$owner/$repo/readme");

        $markdown = $readmeResponse->ok()
            ? base64_decode($readmeResponse->json()['content'])
            : null;

        $branch = $repoDetails['default_branch'] ?? 'master';

        $parsedHtml = null;

        if ($markdown) {
            // Handle Markdown style images ![alt](path)
            $markdown = preg_replace_callback(
                '/!\[([^\]]*)\]\((?!http)([^)]+)\)/',
                function ($matches) use ($owner, $repo, $branch, $repoModel) {
                    $altText = $matches[1];
                    $relativePath = ltrim($matches[2], '/');
                    $rawUrl = "https://raw.githubusercontent.com/$owner/$repo/$branch/$relativePath";

                    // if ($repoModel) {
                    GithubReadmeImage::updateOrCreate(
                        [
                            'repo_id' => $repoModel->id,
                            'img_url' => $rawUrl
                        ],
                        [
                            'alt_text' => $altText,
                            // 'original_path' => $relativePath
                        ]
                    );
                    // }

                    return "![$altText]($rawUrl)";
                },
                $markdown
            );

            // Handle <img src="..."> style images
            $markdown = preg_replace_callback(
                '/<img[^>]+src=["\'](?!http)([^"\']+)["\'][^>]*>/i',
                function ($matches) use ($owner, $repo, $branch, $repoModel) {
                    $relativePath = ltrim($matches[1], '/');
                    $rawUrl = "https://raw.githubusercontent.com/$owner/$repo/$branch/$relativePath";

                    // if ($repoModel) {
                    GithubReadmeImage::updateOrCreate(
                        [
                            'repo_id' => $repoModel->id,
                            'img_url' => $rawUrl
                        ],
                        [
                            'alt_text' => null,
                            // 'original_path' => $relativePath
                        ]
                    );
                    // }

                    return str_replace($matches[1], $rawUrl, $matches[0]);
                },
                $markdown
            );

            $parsedHtml = Parsedown::instance()->text($markdown);
        }

        $languages = Http::withToken($token)
            ->get("https://api.github.com/repos/$owner/$repo/languages")
            ->json() ?? [];

        $release = Http::withToken($token)
            ->get("https://api.github.com/repos/$owner/$repo/releases")
            ->json() ?? [];

        $projects = GithubRepo::where('user_id', Auth::id())
            ->latest('created_at')->take(4)->get();


        // dd($repoModel);
        return view('github.repos.show', compact('repoDetails', 'parsedHtml', 'languages', 'release', 'projects'));
    }
}
