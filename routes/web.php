<?php

use App\Http\Controllers\WebSite\ContactController;
use App\Http\Controllers\WebSite\HomeController;
use App\Http\Controllers\WebSite\PageController;
use App\Http\Controllers\WebSite\UrlController;
use Illuminate\Support\Facades\Route;

// Home
Route::get('/', HomeController::class)
    ->name('home');

// Shorten URL
Route::post('/shorten', [UrlController::class, 'store'])
    ->name('shorten-url');

// Terms of Use
Route::get('/terms-of-use', [PageController::class, 'terms'])
    ->name('terms');

// Privacy Policy
Route::get('/privacy-policy', [PageController::class, 'privacy'])
    ->name('privacy');

// Contact
Route::get('/contact', [ContactController::class, 'index'])
    ->name('contact.index');

// Contact (Submit)
Route::post('/contact', [ContactController::class, 'store'])
    ->name('contact.store');

// Redirect URL
Route::get('/{code}', [UrlController::class, 'redirect'])
    ->name('redirect-url');
