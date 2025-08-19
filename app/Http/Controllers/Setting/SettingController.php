<?php

namespace App\Http\Controllers\Setting;

use App\Http\Controllers\Controller;
use App\Models\GitHubToken;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SettingController extends Controller
{
    public function show(){
        // $pat_token = GitHubToken::where('user_id',Auth::user())->first();
        $pat_token = GitHubToken::where('user_id',Auth::id())->get();

        // $masked_token = substr($pat_token, 0, 6) . str_repeat('*', strlen($pat_token) - 10) . substr($pat_token, -4);

        return view('settings.show',compact('pat_token'));

    }

     public function edit($id){
        // $profile = User::findOrFail($id);
        $setting = Auth::user()->profile;
        return view('settings.edit',compact('setting'));
    }
}
