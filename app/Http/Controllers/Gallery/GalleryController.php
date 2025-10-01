<?php

namespace App\Http\Controllers\Gallery;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function show($username){
        $user = User::where('username',$username)->firstOrFail();
        return view('gallery.show',compact('user'));

    }

    public function edit($username){
        $user = User::where('username',$username)->firstOrFail();

        return view('gallery.edit',compact('user'));
    }
}
