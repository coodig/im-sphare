<?php

namespace App\Http\Controllers\authentication;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Str;

class GithubController extends Controller
{
    public function redirectToGithub()
    {
        return Socialite::driver('github')->redirect();
    }

    public function handleGithubCallback()
    {
        try {

            // $githubUser = Socialite::driver('github')->user();
            // dd($githubUser);
            $githubUser = Socialite::driver('github')->stateless()->user();
            // dd($githubUser);
            $user = User::where('email', $githubUser->getEmail())->first();

            if (!$user) {
                $displayName = $githubUser->getName() ?? $githubUser->getNickname();
                $baseUsername = Str::slug($displayName, '-');

                $username = $baseUsername;
                $count = 1;

                while (User::where('username', $username)->exists()) {
                    $username = $baseUsername . $count;
                    $count++;
                }

                $user = User::create([
                    'username' => $username,
                    'email' => $githubUser->getEmail(),
                    'password' => bcrypt(Str::random(24)),
                    // 'name' => $githubUser->getName(),
                ]);
            }

            Auth::login($user);


            if ($user->role === 'superadmin') {
                return redirect()->route('superadmin.maintenance.show');
            }

            return redirect()->route('dashboard.show', ['username' => $user->username]);
        } catch (\Exception $e) {
            return redirect()->route('login.show')->with('error', 'GitHub login failed: ' . $e->getMessage());
        }
    }
}
