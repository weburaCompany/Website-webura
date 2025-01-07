<?php

use App\Http\Controllers\site\SiteController;
use Illuminate\Support\Facades\Route;



Route::get('/', [SiteController::class, 'index'])->name('webura.index');

Route::prefix('webaura')->name('webura.')->group(function () {

Route::get('about-us', [SiteController::class, 'about_us'])->name('about-us');
Route::get('services', [SiteController::class, 'services'])->name('services');
Route::get('projects', [SiteController::class, 'projects'])->name('projects');
Route::get('FAQ', [SiteController::class, 'faq'])->name('faq');
Route::get('team', [SiteController::class, 'team'])->name('team');
Route::get('blog', [SiteController::class, 'blog'])->name('blog');
Route::get('blog/post/{id}', [SiteController::class, 'single_blog'])->name('single-blog');
Route::get('contact-us', [SiteController::class, 'contact_us'])->name('contact-us');

});
