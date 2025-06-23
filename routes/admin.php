<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\EnquiryController;
use App\Http\Controllers\Admin\IndustryController;
use App\Http\Controllers\Admin\LocationController;
use App\Http\Controllers\Admin\OnlineStoreController;
use App\Http\Controllers\Admin\PageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\TinyMCEController;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;



Route::middleware('auth')->group(function () {


    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // })->middleware(['auth', 'verified'])->name('dashboard');



    Route::get('/admin/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/admin/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/admin/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('dashboard', [ServiceController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::group(['middleware' => 'auth', 'prefix' => 'admin', 'as' => 'admin.'], function () {

    Route::resource('categories', CategoryController::class);
    Route::resource('services', ServiceController::class);
    Route::resource('settings', SettingController::class);
    Route::resource('locations', LocationController::class);
    Route::resource('testimonials', TestimonialController::class);
    Route::resource('online-stores', OnlineStoreController::class);
    Route::resource('industries', IndustryController::class);
    Route::resource('enquiries', EnquiryController::class);
    Route::resource('pages', PageController::class);



    Route::post('/admin/tinymce/upload', [TinyMCEController::class, 'upload'])->withoutMiddleware([VerifyCsrfToken::class])->name('tinymce.upload');
});
