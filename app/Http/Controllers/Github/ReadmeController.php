<?php

namespace App\Http\Controllers\Github;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Failed;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redis;

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

        // if($readmeResponse->failed()){
        //     return back()->with('error','readme not found');
        // }

        $markdown = $readmeResponse->ok()
            ? base64_decode($readmeResponse->json()['content'])
            : null;

        // $readmeData = $readmeResponse->json();
        // $markdown = base64_decode($readmeData['content']);
        $languages = Http::withToken($token)
            ->get("https://api.github.com/repos/$owner/$repo/languages")
            ->json();

        // Fetch releases
        $release = Http::withToken($token)
            ->get("https://api.github.com/repos/$owner/$repo/releases")
            ->json();

        return view('github.repos.show', compact('repoDetails','markdown', 'languages', 'release'));
    }
}
