<?php

use Illuminate\Support\Facades\Route;
use Modules\Auth\App\Http\Controllers\AuthController;


Route::controller(AuthController::class)->group(function(){
    Route::middleware('guest')
        ->prefix('auth')
        ->name('auth.')
        ->group(function(){
            Route::get('login', 'login')->name('login');
            Route::post('verify', 'verify')->name('verify');
        }
    );

    Route::middleware('auth')->group(function(){
        Route::get('gateway', 'gateway')->name('gateway');
        Route::get('logout', 'logout')->name('logout');
    });
});