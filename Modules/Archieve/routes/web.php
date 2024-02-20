<?php

use Illuminate\Support\Facades\Route;
use Modules\Archieve\App\Http\Controllers\DashboardController;

Route::prefix('archieve')
    ->name('archieve.')
    ->group(function(){
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    }
);