<?php

use App\Http\Controllers\SuperAdmin\MaintenanceController;
use App\Http\Controllers\SuperAdmin\SuperadminDashboardController;
use App\Http\Controllers\SuperAdmin\UsersController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth','isSuperAdmin'])->prefix('superadmin')->name('superadmin.')->group(function(){
    Route::get('/maintenance',[MaintenanceController::class,'show'])->name('maintenance.show');

    Route::post('/maintenance/clear-caches', [MaintenanceController::class, 'clearCaches'])
        ->name('maintenance.clear');

    Route::post('/maintenance/queue-restart', [MaintenanceController::class, 'queueRestart'])
        ->name('maintenance.queue.restart');

    Route::post('/maintenance/toggle', [MaintenanceController::class, 'maintenanceToggle'])
        ->name('maintenance.toggle');

    Route::delete('/maintenance/laravel-log', [MaintenanceController::class, 'purgeLaravelLog'])
        ->name('maintenance.purge.laravel_log');

    Route::get('/dashboard',[SuperadminDashboardController::class,'show'])->name('dashboard');
    Route::get('/users-list',[UsersController::class,'index'])->name('users.list');

    Route::get('/users/{id}',[UsersController::class,'show'])->name('user.show');

    Route::post('/delete/{id}',[UsersController::class,'delete'])->name('delete.user');

});

