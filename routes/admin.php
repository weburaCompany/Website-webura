<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\BlogController;
use App\Http\Controllers\admin\FeedbackController;
use App\Http\Controllers\admin\ProjectController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('index');
    Route::resource('projects', ProjectController::class);
    Route::resource('blogs', BlogController::class);
    Route::resource('feedbacks', FeedbackController::class);
});
