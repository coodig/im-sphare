<?php

use App\Http\Controllers\authentication\ForgotPassController;
use App\Http\Controllers\authentication\LogInController;
use App\Http\Controllers\authentication\LogoutController;
// use App\Http\Controllers\authentication\SignInController;
use App\Http\Controllers\authentication\SignUpController;
use Illuminate\Config\Repository;
use Illuminate\Support\Facades\Route;

Route::get('/lio', function () {
    dd(3456789);
    return view('dashboard');
});




Route::get('/pages/signup',[SignUpController::class,'show'])->name('signup.show');
Route::post('/signup',[SignUpController::class,'signUp'])->name('signup');


Route::get('/pages/login',[LogInController::class,'show'])->name('login.show');
Route::post('/login',[LogInController::class,'logIn'])->name('login');

Route::post('/logout',[LogoutController::class,'logout'])->name('logout');
