<?php

use Illuminate\Support\Facades\Route;
use Modules\Inventory\App\Http\Controllers\DashboardController;
use Modules\Inventory\App\Http\Controllers\InventoryController;

Route::prefix('inventory')
    ->name('inventory.')
    ->group(function(){
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

        // Manajemen Data Master Inventaris
        Route::prefix('master')
            ->name('master.')
            ->controller(InventoryController::class)
            ->group(function(){
                Route::get('/', 'index')->name('index');
                Route::get('create', 'create')->name('create');
                Route::post('store', 'store')->name('store');
                Route::prefix('{id}')->group(function(){
                    Route::get('duplicate', 'duplicate')->name('duplicate');
                    Route::get('edit', 'edit')->name('edit');
                    Route::put('update', 'update')->name('update');
                    Route::get('delete', 'delete');
                });
            }
        );
    }
);