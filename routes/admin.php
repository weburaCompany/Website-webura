<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\BlogController;
use App\Http\Controllers\admin\FeedbackController;
use App\Http\Controllers\admin\HomeController;
use App\Http\Controllers\admin\ProjectController;
use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->name('admin.')->middleware('auth:admin')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('index');
    Route::resource('admins', AdminController::class);
    Route::resource('projects', ProjectController::class);
    Route::resource('blogs', BlogController::class);
    Route::resource('feedbacks', FeedbackController::class);
});

Route::prefix('auth')->name('auth.')->middleware('auth:admin')->group(function () {
    Route::get('/profile/edit', [AuthController::class, 'editProfile'])->name('viewEditProfile');
    Route::put('/profile/edit', [AuthController::class, 'updateProfile'])->name('editProfile');
    Route::get('/password/change', [AuthController::class, 'editpassword'])->name('editpassword');
    Route::put('/password/change', [AuthController::class, 'updatePassword'])->name('changePassword');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});

Route::prefix('auth')->group(function () {
    Route::get('login', [AuthController::class, 'showLogin'])->name('auth.login');
    Route::post('login', [AuthController::class, 'login'])->name('login');
});
