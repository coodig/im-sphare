<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use App\Models\SocialMediaLink;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function show($username)
    {

        $user = User::where('username', $username)->firstOrFail();
        $socialMediaLink = SocialMediaLink::where('user_id', $user->user_id)->get();
        return view('profile.show', compact('user', 'socialMediaLink'));
    }

    public function edit($username)
    {
        $user = Auth::user()->username;
        $profile = Auth::user()->profile;
        return view('profile.edit', compact('user','profile'));
    }

    public function update($username,Request $request)
    {
        $user = User::where('username', $username)->firstOrFail();

        $request->validate([
            'name' => 'nullable|string|max:255',
            'bio' => 'nullable|string',
            'location' => 'nullable|string',
            'gender' => 'nullable|in:male,female,other',
            'dob' => 'nullable|date',
            'website' => 'nullable|string',


        ]);

        $user->profile()->updateOrCreate([
            'user_id'=>$user->id
        ],[
            'name' => $request->name,
            'bio' => $request->bio,
            'location' => $request->location,
            'gender' => $request->gender,
            'dob' => $request->dob,
            'website' => $request->website,
        ]);

        // dd($user->profile());

        return redirect()->route('profile.show', ['username' => Auth::user()->username])
            ->with('status', 'Profile updated successfully!');
    }

}
