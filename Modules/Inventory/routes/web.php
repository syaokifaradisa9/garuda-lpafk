<?php

use Illuminate\Support\Facades\Route;
use Modules\Inventory\App\Http\Controllers\DashboardController;
use Modules\Inventory\App\Http\Controllers\InventoryController;

Route::prefix('inventory')
    ->name('inventory.')
    ->group(function(){
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

        
    }
);