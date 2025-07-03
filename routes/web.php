<?php

use App\Http\Controllers\About\AboutController;
use App\Http\Controllers\authentication\ForgotPassController;
use App\Http\Controllers\authentication\LogInController;
use App\Http\Controllers\authentication\LogoutController;
use App\Http\Controllers\authentication\SignInController;
use App\Http\Controllers\authentication\SignUpController;
use App\Http\Controllers\Contact\ContactController;
use App\Http\Controllers\Github\ReadmeController;
use App\Http\Controllers\Github\ReposController;
use App\Http\Controllers\Setting\SettingController;
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


// Route::get('/github/allrepos', [ReposController::class, 'fetchRepos'])->name('repos.index');

// Route::get('/github/repos/{owner}/{repo}/details', [ReadmeController::class, 'repoDetail'])->name('repo.show');


// Route::get('/github-token-form', [ReposController::class, 'showForm'])->name('github.form.show');
// Route::post('/github/repos', [ReposController::class, 'fetchRepos'])->name('repos.index');

// GitHub Token Form
Route::get('/github-token-form', [ReposController::class, 'showForm'])->name('github.form.show');

// GitHub Repo List
// Route::post('/github/repos', [ReposController::class, 'fetchRepos'])->name('repos.index');
Route::match(['get', 'post'], '/github/repos', [ReposController::class, 'fetchRepos'])->name('repos.index');


// GitHub Repo Details (README)
Route::get('/github/repos/{owner}/{repo}/details', [ReadmeController::class, 'repoDetail'])->name('repo.show');




Route::get('/profile', function () {
    return view('profile.show');
})->name('profile');

// Route::get('/setting', function () {
//     return view('settings.show');
// })->name('settings.show');

Route::get('/setting', [SettingController::class, 'show'])->name('settings.show');
Route::get('/contact', [ContactController::class, 'show'])->name('contact.show');
Route::get('/about', [AboutController::class, 'show'])->name('about.show');
