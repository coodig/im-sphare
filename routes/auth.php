<?php

use App\Http\Controllers\authentication\ForgotPassController;
use App\Http\Controllers\Authentication\GoogleController;
use App\Http\Controllers\authentication\LogInController;
use App\Http\Controllers\authentication\LogoutController;
use App\Http\Controllers\authentication\ResetPasswordController;
use App\Http\Controllers\authentication\SignUpController;
use Illuminate\Config\Repository;
use Illuminate\Support\Facades\Route;


Route::get('/signup',[SignUpController::class,'show'])->name('signup.show');
Route::post('/signup',[SignUpController::class,'signUp'])->name('signup');


Route::get('/login',[LogInController::class,'show'])->name('login.show');
Route::post('/login',[LogInController::class,'logIn'])->name('login');


Route::get('/pages/forgot-password', [ForgotPassController::class, 'showForgetPasswordForm'])->name('forgotpass.show');
Route::post('/forgot-password', [ForgotPassController::class, 'sendPasswordResetLink'])->name('password.email');

Route::get('/reset-password/{token}', [ResetPasswordController::class, 'showResetPasswordForm'])->name('password.reset');
Route::post('/reset-password', [ResetPasswordController::class, 'resetPassword'])->name('password.update');

Route::post('/logout',[LogoutController::class,'logout'])->name('logout');


Route::get('auth/google',[GoogleController::class,'redirectToGoogle']);
Route::get('auth/google/callback',[GoogleController::class,'handleGoogleCallback']);
