<?php

use Illuminate\Support\Facades\Route;
use Modules\Staffing\App\Http\Controllers\DashboardController;
use Modules\Staffing\App\Http\Controllers\UnitController;
use Modules\Staffing\App\Http\Controllers\UserController;

Route::prefix('staffing')
    ->name('staffing.')
    ->group(function(){
        Route::get('dashboard', [DashboardController::class, 'index'])->name('index');

        // Route Management Unit
        Route::prefix("unit")
            ->name('unit.')
            ->controller(UnitController::class)
            ->group(function(){
                Route::get('datatable', 'datatable');
                Route::get('/', 'index')->name('index');
                Route::get('create', 'create')->name('create');
                Route::post('store', 'store')->name('store');
                Route::prefix('{id}')->group(function(){
                    Route::get('edit', 'edit')->name('edit');
                    Route::put('update', 'update')->name('update');
                    Route::get('delete', 'delete');
                });
            }
        );

        // Route Management User
        Route::prefix('user')
            ->name('user.')
            ->controller(UserController::class)
            ->group(function(){
                Route::get('/', 'index')->name('index');
                Route::get('create', 'create')->name('create');
                Route::post('store', 'store')->name('store');
                Route::prefix('{id}')->group(function(){
                    Route::get('edit', 'edit')->name('edit');
                    Route::put('update', 'update')->name('update');
                    Route::get('delete', 'delete');
                });

                // API
                Route::get('getByUnit', 'getUserByUnit');
            }
        );
    }
);