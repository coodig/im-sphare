<?php

namespace App\Http\Controllers\Authentication;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;

class GoogleController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    // {
    //     $googleUser = Socialite::driver('google')->user();

    //     $baseUsername = Str::slug($googleUser->getName(), '_');
    //     $username = $baseUsername;
    //     $count = 1;

    //     while (User::where('username', $username)->exists()) {
    //         $username = $baseUsername . $count;
    //         $count++;
    //     }



    //     $user = User::create([
    //         'email' => $googleUser->getEmail(),
    //     ], [
    //         'username' => $username,
    //         'email' => $googleUser->getEmail(),
    //         'password' => bcrypt(Str::random(24)),
    //     ]);

    //     // Profile::updateOrCreate(
    //     //     ['user_id'=>$user->id],
    //     //     ['name'=>$googleUser->getNickname()],
    //     // );

    //     Auth::login($user);
    //     // User is now logged in, you can redirect or perform other actions

    //     // dd($user);


    //     return redirect()->route('dashboard.show', [
    //         'username' => Auth::user()->username
    //     ]);
    // }

    //     public function handleGoogleCallback()
    // {
    //     $googleUser = Socialite::driver('google')->user();

    //     // Check if user already exists by email
    //     $user = User::where('email', $googleUser->getEmail())->first();

    //     if($user){
    //         Auth::login($user);
    //     }else{
    //     // if (!$user) {
    //         // Agar naya user hai to username generate karo
    //         $baseUsername = Str::slug($googleUser->getName(), '_');
    //         $username = $baseUsername;
    //         $count = 1;

    //         while (User::where('username', $username)->exists()) {
    //             $username = $baseUsername . $count;
    //             $count++;
    //         }

    //         // User create karo
    //         $user = User::create([
    //             'username' => $username,
    //             'email'    => $googleUser->getEmail(),
    //             'password' => bcrypt(Str::random(24)), // Random password
    //         ]);
    //         Auth::login($user);
    //     }

    //     // Login the user

    //     // Redirect to dashboard with username
    //     return redirect()->route('dashboard.show', [
    //         'username' => $user->username
    //     ]);
    // }

    public function handleGoogleCallback()
    {
        $googleUser = Socialite::driver('google')->user();

        // Check if user already exists by email
        $user = User::where('email', $googleUser->getEmail())->first();

        if (!$user) {
            // Agar naya user hai to username generate karo
            $baseUsername = Str::slug($googleUser->getName(), '-');
            $username = $baseUsername;
            $count = 1;

            while (User::where('username', $username)->exists()) {
                $username = $baseUsername . $count;
                $count++;
            }

            // Naya user create karo
            $user = User::create([
                'username' => $username,
                'email'    => $googleUser->getEmail(),
                'password' => bcrypt(Str::random(24)), // Random password
                'name'     => $googleUser->getName(),  // Optional: agar tumhare table me hai
            ]);
        }

        // Login karao
        Mail::to($user->email)->send(new WelcomeMail($user));
        Auth::login($user);

        if ($user->role === 'superadmin') {
            return redirect()->route('superadmin.maintenance.show');
        }
        // Redirect to dashboard
        return redirect()->route('dashboard.show', [
            'username' => $user->username
        ]);
    }
}
