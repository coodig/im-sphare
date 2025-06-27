<?php

use App\Http\Controllers\authentication\ForgotPassController;
use App\Http\Controllers\authentication\LogInController;
use App\Http\Controllers\authentication\LogoutController;
use App\Http\Controllers\authentication\SignInController;
use App\Http\Controllers\authentication\SignUpController;
use App\Http\Controllers\Github\ReposController;
use Illuminate\Config\Repository;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard.show');
})->name('dashboard.show');

Route::get('/pages/forgotpass',[SignUpController::class,'show'])->name('forgotpass.show');
Route::post('/forgotpass',[ForgotPassController::class,'fortgotPass'])->name('forgotpass');


Route::get('/github/allrepos', [ReposController::class, 'fetchRepos'])->name('repos.index');

Route::get('/github/repo/show', [ReposController::class, 'show'])->name('repos.show');


Route::get('/profile', function () {
    return view('profile.show');
})->name('profile');

Route::get('/setting', function () {
    return view('settings.show');
})->name('settings.show');
