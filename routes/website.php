<?php

use App\Http\Controllers\Website\ContactController;
use App\Http\Controllers\Website\PageController;
use App\Http\Controllers\Website\UrlController;
use Illuminate\Support\Facades\Route;

// Website
Route::name('website.')->group(function (): void {
    // Pages
    Route::name('pages.')
        ->controller(PageController::class)
        ->group(function (): void {
            // Home Page
            Route::get('', 'home')
                ->name('home');

            // Terms of Use Page
            Route::get('terms-of-use', 'terms')
                ->name('terms');

            // Privacy Policy Page
            Route::get('privacy-policy', 'privacy')
                ->name('privacy');
        });

    // Contact
    Route::name('contact.')
        ->prefix('contact')
        ->controller(ContactController::class)
        ->group(function (): void {
            // Contact Page
            Route::get('', 'show')
                ->name('show');

            // Submit
            Route::post('', 'store')
                ->name('store');
        });

    // URL
    Route::name('url.')
        ->controller(UrlController::class)
        ->group(function (): void {
            // Shorten
            Route::post('shorten', 'shorten')
                ->name('shorten');

            // Redirect
            Route::get('{code}',  'redirect')
                ->where('code', '[A-Za-z0-9]{8}')
                ->name('redirect');
        });
});
