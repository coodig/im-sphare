<?php

namespace App\Http\Controllers\Github;

use App\Http\Controllers\Controller;
use App\Models\GitHubToken;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GitHubTokenController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'token' => 'required|string|min:30|unique:github_tokens,github_token',
        ], [
            'token.unique' => 'This GitHub token is already in use.',
            'token.min' => 'The GitHub token must be at least 30 characters.',
        ]);

        GitHubToken::updateOrCreate(
            ['user_id' => Auth::id()],
            ['github_token' => $request->token]
        );
        // return redirect()->route('github.repos.index')->with('success','github token access successfully');
        // return view('github.repos.index',['token'=>$request->token]);
        session(['github_token' => $request->token]);
        $username = Auth::user()->username;
        return redirect()->route('repos.index', compact('username'));
    }

    public function showform()
    {
        $githubTokenModel = GitHubToken::where('user_id', Auth::id())->first();
        $token = $githubTokenModel ? $githubTokenModel->github_token : null;
        return view('github.github_token', compact('token'));
    }
}
