<?php

use App\Http\Controllers\About\AboutController;
use App\Http\Controllers\Academics\AcademicsController;
use App\Http\Controllers\Contact\ContactController;
use App\Http\Controllers\DashboardController;
// use App\Http\Controllers\SuperAdmin\UsersController;
use App\Http\Controllers\Follower\FollowerController;
use App\Http\Controllers\Gallery\GalleryController;
use App\Http\Controllers\Github\GitHubTokenController;
use App\Http\Controllers\Github\ReadmeController;
use App\Http\Controllers\Github\ReposController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\Pages\AboutUsController;
use App\Http\Controllers\Pages\PrivacyController;
use App\Http\Controllers\Pages\TermsController;
use App\Http\Controllers\Profile\ProfileController;
use App\Http\Controllers\Setting\SettingController;
use App\Http\Controllers\Skills\SkillController;
use App\Http\Controllers\SocialMediaLink\SocialMediaLinkController;
use App\Http\Controllers\SuperAdmin\SuperAdminDashboardController;
use App\Http\Controllers\SuperAdmin\UsersController as SuperAdminUsersController;
use Illuminate\Config\Repository;
use Illuminate\Foundation\Console\RouteCacheCommand;
use Illuminate\Support\Facades\Route;

Route::get('/',[LandingController::class,'show'])->name('landing.show');

Route::post('/github/token/store', [GitHubTokenController::class, 'store'])->name('github.token.store');

Route::get('/u/{username}/projects/{owner}/{repo}/details', [ReadmeController::class, 'repoDetail'])->name('repo.show');

Route::prefix('/u/{username}')->group(function () {

    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/dashboard', [DashboardController::class, 'userDashboard'])->name('dashboard.show');

    Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile/update', [ProfileController::class, 'update'])->name('profile.update');

    Route::get('/github-token-form', [GitHubTokenController::class, 'showForm'])->name('github.form.show');
    Route::get('/projects', [ReposController::class, 'fetchRepos'])->name('repos.index');


    Route::get('/about-me', [AboutController::class, 'show'])->name('about-me.show');
    // Route::get('/about-me/edit', [AboutController::class, 'edit'])->name('about-me.edit');
    Route::post('/about-me/update', [AboutController::class, 'update'])->name('about-me.update');

    Route::get('/index-me',[AboutController::class,'index_show'])->name('index_show');

    Route::get('/setting', [SettingController::class, 'show'])->name('settings.show');
    Route::get('/setting/edit', [SettingController::class, 'edit'])->name('settings.edit');
    Route::post('/setting/update',[SettingController::class,'update'])->name('settings.update');

    Route::get('/contact', [ContactController::class, 'show'])->name('contact.show');
    Route::get('/contact-me/edit', [ContactController::class, 'edit'])->name('contact_me.edit');
    // Route::post('/contact-me/update',[ContactController::class,'update'])->name('contact_me.update')


    Route::get('/followers',[FollowerController::class,'followers'])->name('followers');

    Route::post('/toogle-follow',[FollowerController::class,'toogleFollow'])->name('tooglefollow');


    Route::post('/profile/banner',[ProfileController::class,'uploadProfileBanner'])->name('profile-banner');



    Route::get('/academics',[AcademicsController::class,'show'])->name('academics.show');
    Route::get('/academics/edit',[AcademicsController::class,'edit'])->name('academics.edit');

    Route::get('/gallery',[GalleryController::class,'index'])->name('gallery.index');
    Route::get('/gallery/show',[GalleryController::class,'show'])->name('gallery.show');
    Route::get('/gallery/edit',[GalleryController::class,'edit'])->name('gallery.edit');

});

Route::prefix('/pages')->group(function () {
    Route::get('/about-us', [AboutUsController::class, 'show'])->name('about_us.show');
    Route::get('/terms', [TermsController::class, 'show'])->name('terms.show');
    Route::get('/privacy', [PrivacyController::class, 'show'])->name('privacy.show');
});

Route::post('/settings/privacy', [PrivacyController::class, 'updatePrivacy'])->name('privacy.update');

Route::get('/profile/create', [ProfileController::class, 'create'])->name('profile.create');

Route::get('/skills', [SkillController::class, 'show'])->name('skills.show');
Route::get('/skills/edit', [SkillController::class, 'edit'])->name('skills.edit');
Route::get('/skills/update', [SkillController::class, 'edit'])->name('skills.update');


Route::prefix('super-admin')->name('superadmin.')->group(function () {
    Route::get('dashboard', [SuperAdminDashboardController::class, 'index'])->name('dashboard');
    Route::resource('users',SuperAdminUsersController::class);
});





// Error page testing routes
Route::prefix('test-error')->group(function () {
    Route::get('/401', fn() => abort(401));
    Route::get('/402', fn() => abort(402));
    Route::get('/403', fn() => abort(403));
    Route::get('/404', fn() => abort(404));
    Route::get('/419', fn() => abort(419));
    Route::get('/429', fn() => abort(429));
    Route::get('/500', fn() => abort(500));
    Route::get('/503', fn() => abort(503));
    Route::get('/welcome-mail', fn() => abort(503));
});
