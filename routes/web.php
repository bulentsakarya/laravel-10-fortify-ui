<?php

use App\Http\Controllers\User\Dashboard;
use App\Http\Controllers\User\Profile\ProfileController;
use App\Http\Controllers\User\Profile\TwoFactorAuthenticationController;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Events\TwoFactorAuthenticationEvent;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::redirect('/', 'login');

Route::middleware(['auth', 'auth.session', 'verified'])->prefix('user')->name('user.')->group(function(){
    Route::controller(Dashboard::class)->group(function(){
        Route::get('/home', 'index')->name('home');
    });

    Route::controller(ProfileController::class)->group(function(){
        Route::get('/profile', 'index')->name('profile');
    });

    Route::controller(TwoFactorAuthenticationController::class)->group(function(){
        Route::get('/two-factor-authentication', 'index')->name('twofactor');
    });
});
