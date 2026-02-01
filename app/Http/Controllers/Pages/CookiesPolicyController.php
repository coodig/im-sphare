<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CookiesPolicyController extends Controller
{
    public function show()
    {
        return view('pages.cookies-policy.show');
    }
}
