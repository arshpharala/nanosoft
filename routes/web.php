<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/services', [HomeController::class, 'service'])->name('service');
Route::get('/service/{category}/{service}', [HomeController::class, 'serviceDetail'])->name('service.detail');

Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/enquiry', [HomeController::class, 'enquiry'])->name('enquiry');
Route::post('/subscribe', [HomeController::class, 'subscribe'])->name('subscribe');
Route::get('/about-us', [HomeController::class, 'about'])->name('about');
Route::get('/terms-and-conditions', [HomeController::class, 'terms'])->name('terms');
Route::get('/privacy-policy', [HomeController::class, 'privacy'])->name('privacy');
Route::get('/modern-slavery', [HomeController::class, 'slavery'])->name('slavery');
Route::get('/licences', [HomeController::class, 'licence'])->name('licences');
Route::get('news', [HomeController::class,'news'])->name('news');
Route::get('news/{slug}', [HomeController::class,'newsDetail'])->name('news.detail');
Route::get('educational-guides', [HomeController::class,'educationalGuide'])->name('educational-guide');
Route::get('educational-guide/{slug}', [HomeController::class,'educationalGuideDetail'])->name('educational-guide.detail');

// Route::get('/{slug}', [HomeController::class, 'page'])->name('page');

require __DIR__ . '/auth.php';
require __DIR__ . '/admin.php';
