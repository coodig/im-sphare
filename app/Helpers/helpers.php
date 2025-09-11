<?php

use Illuminate\Support\Facades\Route;

if (!function_exists('nav_active')) {
    function nav_active($pattern)
    {
        return Route::is($pattern) ? 'active' : '';
    }
}
