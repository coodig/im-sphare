<?php

namespace App\Http\Controllers\Github;

use App\Http\Controllers\Controller;
use App\Models\GitHubToken;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GitHubTokenController extends Controller
{
    public function store(Request $request){
        $request ->validate([
            'token' => 'string|min:30',
        ]);

        GitHubToken::updateOrCreate(
            ['user_id' => Auth::id()],
            ['github_token' => $request -> token]
        );
        // return redirect()->route('github.repos.index')->with('success','github token access successfully');
        // return view('github.repos.index',['token'=>$request->token]);
        session(['github_token' => $request->token]);
return redirect()->route('repos.index');
    }

     public function showform(){
        return view('github.github_token');
    }
}
