<?php

namespace App\Http\Controllers;

use App\Models\GithubRepo;
use App\Models\GitHubToken;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function userDashboard()
    {
        $user = Auth::user();

        $hasGithubToken = false;

        if ($user) {
            $hasGithubToken = GitHubToken::where('user_id', $user->id)->exists();
        }
        $repos = GithubRepo::where('user_id', Auth::id())->orderByDesc('updated_at')->take(4)->get();
        $totalRepos = GithubRepo::where('user_id', Auth::id())->count();
        return view('dashboard.show', compact('hasGithubToken', 'totalRepos', 'repos'));
        // return view('dashboard.show', compact('hasGithubToken', 'totalRepos'));
    }
}
