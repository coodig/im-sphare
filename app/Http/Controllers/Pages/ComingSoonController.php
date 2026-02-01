<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ComingSoonController extends Controller
{
    public function show(){
        return view('pages.coming-soon.show');
    }
}
