<?php

use Illuminate\Support\Facades\Route;
use Modules\Archieve\App\Http\Controllers\DashboardController;
use Modules\Archieve\App\Http\Controllers\MainCodeController;
use Modules\Archieve\App\Http\Controllers\SubCodeController;

Route::prefix('archieve')
    ->name('archieve.')
    ->group(function(){
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

        Route::prefix('code')
            ->name('code.')
            ->group(function(){
                // Pokok Utama
                Route::prefix('main')
                    ->name('main.')
                    ->controller(MainCodeController::class)
                    ->group(function(){
                        Route::get('/', 'index')->name('index');
                    }
                );

                // Sub Masalah
                Route::prefix('sub')
                    ->name('sub.')
                    ->controller(SubCodeController::class)
                    ->group(function(){
                        Route::get('/', 'index')->name('index');
                    }
                );
            }
        );
    }
);