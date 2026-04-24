<?php

namespace App\Http\Controllers;

use App\Models\GithubRepo;
use App\Models\GitHubToken;
use App\Models\SocialMediaLink;
use App\Models\UserAbout;
use App\Notifications\WelcomeNotification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;
use Laravel\Socialite\Two\GithubProvider;

use function Laravel\Prompts\select;

class HomeController extends Controller
{

    public function index($username)
    {
        $user = Auth::user();
        $hasGitHubToken = false;
        $user_about = null;
        if ($user) {
            $hasGitHubToken = GitHubToken::where('user_id', $user->getAuthIdentifier())->exists();
            $totalRepos = GithubRepo::where('user_id', $user->id)->count();
            // $user_about = UserAbout::where('user_id', Auth::id())->first();
            // $socialMediaLink = SocialMediaLink::where('user_id', Auth::id())->first();
            // $links = SocialMediaLink::where('user_id', Auth::id())->get();
            // Notification::send($user, new WelcomeNotification());

            // $skills =
            $recent_projects = GithubRepo::where('user_id',Auth::id())->latest('pushed_at')->take(3)->get();
        }


        return view('home', compact('hasGitHubToken', 'user_about','username','totalRepos','recent_projects'));
    }
}
