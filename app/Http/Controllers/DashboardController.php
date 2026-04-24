<?php

namespace App\Http\Controllers;

use App\Models\GithubRepo;
use App\Models\GitHubToken;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class DashboardController extends Controller
{
    public function userDashboard()
    {
        $user = Auth::user();

        $hasGithubToken = false;
        $githubActivity = collect();

        if ($user) {
            // $hasGithubToken = GitHubToken::where('user_id', $user->id)->exists();
            $tokenRecord = GitHubToken::where('user_id',$user->id)->first();

            if($tokenRecord){
                $hasGithubToken= true;

                try{
                    $username = $tokenRecord->github_username;
                    $token = $tokenRecord->github_token;

                    if($username && $token){
                        $response = Http::withToken($token)->timeout(5)->get('https://api.github.com/users/{$username}/events');

                        if($response->successful()){
                            $githubActivity = collect($response->json())->take(5);
                        }
                    }
                }catch(Exception $e){

                }
            }
        }
        $repos = GithubRepo::where('user_id', Auth::id())->latest('pushed_at')->take(4)->get();
        $totalRepos = GithubRepo::where('user_id', Auth::id())->count();
        return view('dashboard.show', compact('hasGithubToken', 'totalRepos', 'repos','githubActivity'));
        // return view('dashboard.show', compact('hasGithubToken', 'totalRepos'));
    }

    public function calculateUserSkills($user , $token){

    }
}
