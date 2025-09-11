<?php

namespace App\Http\Controllers\About;

use App\Http\Controllers\Controller;
// use App\Models\User;
use App\Models\UserAbout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use PDO;

class AboutController extends Controller
{

    public function show($username){

        return view('about-me.show');
    }

    // public function edit($username){
    //     if (Auth::user()->username !== $username) {
    //     abort(403, 'Unauthorized action.');
    // }
    //     $user_about = UserAbout::where('user_id',Auth::id())->firstOrFail();
    //     // dd($user_about);
    //     return view('about-me.edit',compact('user_about'));
    // }


    public function update(Request $request,$username){

        $request->validate([
            'title' => 'string|max:100',
            'description' =>'string| max:100',
            'content' =>'string',
            'image' =>'nullable|image|mimes:jpg,png,jpeg,gif|max:2048',

        ]);

        $user_about = UserAbout::where('user_id',Auth::id())->firstOrFail();
        $user_about ->update([
            'title'=>$request->about_title,
            'description'=>$request->about_description,
            'content'=>$request->about_content,
        ]);

        if($request->hasFile('image') && $request->file('image')->isValid()){
            if($user_about->image && Storage::disk('public')->exists($user_about->image)){
                Storage::disk('public')->delete($user_about->image);
            }
        }

        $path = $request->file('image')->store('about_images', 'public');
        $user_about->image = $path;

        $user_about ->save();
        return redirect()->route('about-me.show',$username)->with('message','About Me page updated successfully');

    }

    public function index_show($username){
        $index = Auth::user()->username;
        dd($index);

    }
}
