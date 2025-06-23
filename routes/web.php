<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/services', [HomeController::class, 'service'])->name('service');
Route::get('/service/{category}/{service}', [HomeController::class, 'serviceDetail'])->name('service.detail');

Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/enquiry', [HomeController::class, 'enquiry'])->name('enquiry');
Route::get('/about-us', [HomeController::class, 'about'])->name('about');
Route::get('/terms-and-conditions', [HomeController::class, 'terms'])->name('terms');
Route::get('/privacy-policy', [HomeController::class, 'privacy'])->name('privacy');


// Route::get('/{slug}', [HomeController::class, 'page'])->name('page');

require __DIR__ . '/auth.php';
require __DIR__ . '/admin.php';
