<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use App\Models\SocialMediaLink;
use App\Models\User;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function show($username)
    {

        $user = User::where('username', $username)->firstOrFail();
        // $socialMediaLink = SocialMediaLink::where('user_id', $user->user_id)->get();
        return view('profile.show', compact('user'));
    }

    public function edit($username)
    {
        $user = Auth::user()->username;
        $profile = Auth::user()->profile;
        return view('profile.edit', compact('user', 'profile'));
    }

    public function update($username, Request $request)
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

        // 'profile_image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
        $user->profile()->updateOrCreate([
            'user_id' => $user->id
        ], [
            'name' => $request->name,
            'bio' => $request->bio,
            'location' => $request->location,
            'gender' => $request->gender,
            'dob' => $request->dob,
            'website' => $request->website,
        ]);

        return redirect()->route('profile.show', ['username' => Auth::user()->username])
            ->with('status', 'Profile updated successfully!');
    }

    public function uploadProfileBanner(Request $request, $username){

        $user = Auth::user()->username;
        $request -> Validate([
            'profile-banner'=>'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if($user->profile && $user->profile->profile_banner){

            Storage::disk('public')->delete($user->profile->profile_banner);
        }

        $path = $request->file('banner')->store('profile_media/banner','public');

        $user->profile->update([
            'profile_banner'=>$path
        ]);
        dd($path);

        // $user->profile_image = $path;

        // return redirect()->back()->with('success','Profile Banner updatted successfully..');


   }
}
