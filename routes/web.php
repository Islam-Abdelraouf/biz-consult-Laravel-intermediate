<?php

use App\Http\Controllers\admin\LanguageSwitcher;
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

        // Authenticated routes (dashboard, logout)
        Route::middleware('auth')->group(function () {
            Route::view('/', 'admin.dashboard.index')->name('dashboard');
        });
    });


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });


