<?php

use App\Http\Controllers\About\AboutController;
use App\Http\Controllers\authentication\ForgotPassController;
use App\Http\Controllers\authentication\LogInController;
use App\Http\Controllers\authentication\LogoutController;
use App\Http\Controllers\authentication\ResetPasswordController;
use App\Http\Controllers\authentication\SignInController;
use App\Http\Controllers\authentication\SignUpController;
use App\Http\Controllers\Contact\ContactController;
use App\Http\Controllers\DashboardController;
// use App\Http\Controllers\SuperAdmin\UsersController;
use App\Http\Controllers\Github\GitHubTokenController;
use App\Http\Controllers\Github\ReadmeController;
use App\Http\Controllers\Github\ReposController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Pages\AboutUsController;
use App\Http\Controllers\Pages\PrivacyController;
use App\Http\Controllers\Pages\TermsController;
use App\Http\Controllers\Profile\ProfileController;
use App\Http\Controllers\Setting\SettingController;
use App\Http\Controllers\Skills\SkillController;
use App\Http\Controllers\SocialMediaLink\SocialMediaLinkController;
use App\Http\Controllers\SuperAdmin\DashboardController as SuperAdminDashboardController;
use App\Http\Controllers\SuperAdmin\UsersController as SuperAdminUsersController;
use Illuminate\Config\Repository;
use Illuminate\Foundation\Console\RouteCacheCommand;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/pages/forgot-password', [ForgotPassController::class, 'showForgetPasswordForm'])->name('forgotpass.show');
Route::post('/forgot-password', [ForgotPassController::class, 'sendPasswordResetLink'])->name('password.email');

Route::get('/reset-password/{token}', [ResetPasswordController::class, 'showResetPasswordForm'])->name('password.reset');
Route::post('/reset-password', [ResetPasswordController::class, 'resetPassword'])->name('password.update');

Route::post('/github/token/store', [GitHubTokenController::class, 'store'])->name('github.token.store');



Route::get('/u/{username}/projects/{owner}/{repo}/details', [ReadmeController::class, 'repoDetail'])->name('repo.show');


Route::prefix('/u/{username}')->group(function () {
    Route::get('/github-token-form', [GitHubTokenController::class, 'showForm'])->name('github.form.show');
    // Route::get('projects/{owner}/{repo}/details', [ReadmeController::class, 'repoDetail'])->name('repo.show');
    Route::get('/projects', [ReposController::class, 'fetchRepos'])->name('repos.index');

    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile/update', [ProfileController::class, 'update'])->name('profile.update');

    Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');

    Route::get('/setting/edit', [SettingController::class, 'edit'])->name('settings.edit');
    Route::get('/about', [AboutController::class, 'show'])->name('about_me.show');
    Route::get('/about-me/edit', [AboutController::class, 'edit'])->name('about_me.edit');
    Route::get('/contact-me/edit', [ContactController::class, 'edit'])->name('contact_me.edit');
    Route::post('/about-me/update', [AboutController::class, 'update'])->name('about_me.update');
    Route::get('/setting', [SettingController::class, 'show'])->name('settings.show');
    Route::get('/contact', [ContactController::class, 'show'])->name('contact.show');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.show');
});




Route::prefix('/pages')->group(function () {
    Route::get('/about-us', [AboutUsController::class, 'show'])->name('about_us.show');
    Route::get('/terms', [TermsController::class, 'show'])->name('terms.show');
    Route::get('/privacy', [PrivacyController::class, 'show'])->name('privacy.show');
});

// Route::put('/setting/privacy',[PrivacyController::class,'updatePrivacy'])->name('profile.updatePrivacy');

Route::post('/settings/privacy', [PrivacyController::class, 'updatePrivacy'])->name('privacy.update');

// Route::get('/social-links/{id}/edit', [SocialMediaLinkController::class, 'update'])->name('social_link.edit');

Route::get('/profile/create', [ProfileController::class, 'create'])->name('profile.create');

Route::get('/skills', [SkillController::class, 'show'])->name('skills.show');
Route::get('/skills/edit', [SkillController::class, 'edit'])->name('skills.edit');
Route::get('/skills/update', [SkillController::class, 'edit'])->name('skills.update');


Route::prefix('super-admin')->name('superadmin.')->group(function () {
    Route::get('dashboard', [SuperAdminDashboardController::class, 'index'])->name('dashboard');
    Route::resource('users',SuperAdminUsersController::class);
});
