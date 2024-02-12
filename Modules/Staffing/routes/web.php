<?php

use Illuminate\Support\Facades\Route;
use Modules\Staffing\App\Http\Controllers\DashboardController;
use Modules\Staffing\App\Http\Controllers\UnitController;

Route::prefix('staffing')
    ->name('staffing.')
    ->group(function(){
        Route::get('dashboard', [DashboardController::class, 'index'])->name('index');

        // Route Management Unit
        Route::prefix("unit")
            ->name('unit.')
            ->controller(UnitController::class)
            ->group(function(){
                Route::get('/', 'index')->name('index');
            }
        );
    }
);