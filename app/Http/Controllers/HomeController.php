<?php

namespace App\Http\Controllers;

use App\Models\GithubRepo;
use App\Models\GitHubToken;
use App\Models\SocialMediaLink;
use App\Models\UserAbout;
use App\Notifications\WelcomeNotification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use PhpParser\Node\Expr\FuncCall;

class HomeController extends Controller
{

    public function index($username)
    {
        $user = Auth::user();
        $hasGitHubToken = false;
        $user_about = null;
        if ($user) {
            $hasGitHubToken = GitHubToken::where('user_id', $user->getAuthIdentifier())->exists();
            $user_about = UserAbout::where('user_id', Auth::id())->first();
            $socialMediaLink = SocialMediaLink::where('user_id', Auth::id())->first();
            $links = SocialMediaLink::where('user_id', Auth::id())->get();
            Notification::send($user, new WelcomeNotification());
            // $repos = GithubRepo::where('user_id', Auth::id())->orderByDesc('updated_at')->take(4)->get();
        }


        // $socialMediaLink = SocialMediaLink::where('user_id',Auth::id())->firstOrFail();
        // dd($socialMediaLink,$user_about,$hasGitHubToken);
        // return view('home',compact('hasGitHubToken','user_about','socialMediaLink','links'));
        return view('home', compact('hasGitHubToken', 'user_about','username'));
    }
}
