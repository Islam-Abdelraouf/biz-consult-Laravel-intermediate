<?php

use App\Http\Controllers\admin\LanguageSwitcher;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\SubscriberController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

// Public routes - Without locale prefix
Route::name('front.')->group(function (): void {
    Route::view('/', 'front.index')->name('home');
    Route::view('/about', 'front.about')->name('about');
    Route::view('/service', 'front.service')->name('service');
    Route::view('/contact', 'front.contact')->name('contact');
});

// Admin routes - With locale prefix
Route::prefix(LaravelLocalization::setLocale() . '/admin')
    ->middleware(['localeSessionRedirect', 'localizationRedirect', 'localeViewPath'])
    ->name('admin.')
    ->group(function () {

        require __DIR__ . "/auth.php";

        // Authenticated routes
        Route::middleware('auth')->group(function () {
            //----------------------------------------->>>> HOME PAGE
            Route::view('/', 'admin.dashboard.index')->name('dashboard');

            //----------------------------------------->>>> SERVICES
            Route::controller(ServiceController::class)->group(function () {
                Route::resource('services', ServiceController::class);
            });

            //----------------------------------------->>>> FEATURES
            Route::controller(FeatureController::class)->group(function () {
                Route::resource('features', FeatureController::class);
            });

            //----------------------------------------->>>> MESSAGES
            Route::controller(MessageController::class)->group(function () {
                Route::resource('messages', MessageController::class)->only(['index','show','destroy']);
            });

            //----------------------------------------->>>> SUBSCRIBERS
            Route::controller(SubscriberController::class)->group(function () {
                Route::resource('subscribers', SubscriberController::class)->only(['index','destroy']);
            });
        });
    });

