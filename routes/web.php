<?php

use App\Http\Controllers\Site\ContactController;
use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\Site\PageController;
use App\Http\Controllers\Site\UrlController;
use Illuminate\Support\Facades\Route;

// Home
Route::get('/', HomeController::class)
    ->name('home');

// Shorten URL
Route::post('/shorten', [UrlController::class, 'store'])
    ->name('shorten-url');

// Redirect URL
Route::get('/{code}', [UrlController::class, 'redirect'])
    ->name('redirect-url');

// Terms of Use
Route::get('/terms-of-use', [PageController::class, 'terms'])
    ->name('terms');

// Privacy Policy
Route::get('/privacy-policy', [PageController::class, 'privacy'])
    ->name('privacy');

// Contact
Route::get('/contact', [ContactController::class, 'index'])
    ->name('contact');
