<?php

namespace App\Http\Controllers\Academics;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;
use PhpParser\NodeVisitor\CommentAnnotatingVisitor;

class AcademicsController extends Controller
{
    public function show($username){
        $user = User::where('username',$username)->firstOrFail();
        return view('academics.show',compact('user'));

    }

    public function edit($username){
        $user = User::where('username',$username)->firstOrFail();

        return view('academics.edit',compact('user'));
    }
}
