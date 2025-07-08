<?php

namespace App\Http\Controllers\Github;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Failed;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redis;
use Parsedown;

class ReadmeController extends Controller
{
    public function repoDetail($owner, $repo, Request $request)
    {
        $token = session('github_token');

        if (!$token) {
            return redirect()->route('github.form.show')->with('error', 'Please enter your github token');
        }

        $repoDetails = Http::withToken($token)
            ->get("https://api.github.com/repos/$owner/$repo")
            ->json();

        $readmeResponse = Http::withToken($token)->get("https://api.github.com/repos/$owner/$repo/readme");

        $markdown = $readmeResponse->ok()
            ? base64_decode($readmeResponse->json()['content'])
            : null;

        $branch = $repoDetails['defualt_branch'] ?? 'master';

        if($markdown){
            $markdown = preg_replace_callback('/!\[([^\]]*)\]\((?!http)([^)]+)\)/', function ($matches) use ($owner, $repo, $branch) {
                $altText = $matches[1];
                $relativePath = ltrim($matches[2],'/');
                $rawUrl = "https://raw.githubusercontent.com/$owner/$repo/$branch/$relativePath";
                return "![$altText]($rawUrl)";
            },$markdown);
            $parsedHtml = Parsedown::instance()->text($markdown);
        }else{
            $parsedHtml = null;
        }

        $languages = Http::withToken($token)
            ->get("https://api.github.com/repos/$owner/$repo/languages")
            ->json();

        $release = Http::withToken($token)
            ->get("https://api.github.com/repos/$owner/$repo/releases")
            ->json();

        return view('github.repos.show', compact('repoDetails','parsedHtml', 'languages', 'release'));
    }
}
