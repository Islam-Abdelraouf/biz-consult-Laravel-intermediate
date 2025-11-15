<?php

use App\Http\Controllers\admin\LanguageSwitcher;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\HeroController;
use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

// Front routes - Without locale prefix

Route::name('front.')->controller(FrontController::class)->group(function (): void {
    //----------------------------------------->>>> STORE SUBSCRIBERS
    Route::post('/subscriber/store', 'subscriberStore')->name('subscriber.store');
    //----------------------------------------->>>> STORE MESSAGEs
    Route::post('/message/store', 'messageStore')->name('message.store');
    //----------------------------------------->>>> HOME PAGE
    Route::get('/', 'index')->name('home');
    //----------------------------------------->>>> ABOUT PAGE
    Route::get('/about', 'about')->name('about');
    //----------------------------------------->>>> SERVICES PAGE
    Route::get('/service', 'service')->name('service');
    //----------------------------------------->>>> CONTACE PAGE
    Route::get('/contact', 'contact')->name('contact');
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
                Route::resource('messages', MessageController::class)->only(['index', 'show', 'destroy']);
            });

            //----------------------------------------->>>> SUBSCRIBERS
            Route::controller(SubscriberController::class)->group(function () {
                Route::resource('subscribers', SubscriberController::class)->only(['index', 'show', 'destroy']);
            });

            //----------------------------------------->>>> TESTMONIALS
            Route::controller(TestimonialController::class)->group(function () {
                Route::resource('testimonials', TestimonialController::class);
            });

            //----------------------------------------->>>> MEMBERS
            Route::controller(MemberController::class)->group(function () {
                Route::resource('members', MemberController::class);
            });

            //----------------------------------------->>>> COMPANIES
            Route::controller(CompanyController::class)->group(function () {
                Route::resource('companies', CompanyController::class);
            });

            //----------------------------------------->>>> SETTINGS
            Route::controller(SettingController::class)->group(function () {
                Route::resource('settings', SettingController::class)->only(['index','update']);
            });

            //----------------------------------------->>>> HEROES
            Route::controller(HeroController::class)->group(function () {
                Route::resource('heroes', HeroController::class)->only(['index', 'update']);
            });


        });
    });

