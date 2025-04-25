<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\CarControllerController;
use Illuminate\Support\Facades\Route;


Route::get('/cars', function () {
    return "hello world";
});

Route::controller(CarController::class)
    ->prefix('cars')
    ->name('cars.')
    ->group(function () {
        Route::get('', 'index')->name('index');
    });

Route::middleware('guest')
    ->group(function () {
        Route::get('register', [RegisterController::class, 'create'])->name('register');
        Route::post('register', [RegisterController::class, 'store']);
    });
