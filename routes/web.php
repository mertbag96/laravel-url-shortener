<?php

use App\Http\Controllers\Site\ContactController;
use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\Site\PageController;
use Illuminate\Support\Facades\Route;


// Home
Route::get('/', HomeController::class)
    ->name('home');

// Terms of Use
Route::get('/terms-of-use', [PageController::class, 'terms'])
    ->name('terms');

// Privacy Policy
Route::get('/privacy-policy', [PageController::class, 'privacy'])
    ->name('privacy');

// Contact
Route::get('/contact', [ContactController::class, 'index'])
    ->name('contact');
