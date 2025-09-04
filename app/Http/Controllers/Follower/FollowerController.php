<?php

namespace App\Http\Controllers\Follower;

use App\Http\Controllers\Controller;
use App\Models\Follower;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FollowerController extends Controller
{
    public function toogleFollow($username)
    {
        $authUser = Auth::user();
        $user = User::where('username', $username)->firstOrFail();

        if ($authUser->id === $user->id) {
            return back()->with('error', 'You can\'t not follow yourself');
        }

        $follow = Follower::where('user_id', $user->id)->where('follower_id', $authUser->id)->first();

        if ($follow) {
            $follow->delete();
            return back()->with('success', 'Unfollow successfully');
        } else {
            Follower::create([
                'user_id' => $user->id,
                'follower_id' => $authUser->id,
                'status' => 'accepted'
            ]);
        }

        return back()->with('success', 'you start following');
    }


    public function followers($username)
    {
        // $user = User::where('username', $username)->following->firstOrFail()->paginate('20');

        $user = User::where('username',$username)->firstOrFail();


        // $users = User::all()->paginate('10');
        $followers = $user->followers()->paginate(10);

        // dd($followers);
        return view('follower.show',compact('followers'));
    }
}
