<?php

use Illuminate\Support\Facades\Route;

Route::get('/cars', function () {
    return "hello world";
});

//Route::middleware('guest')
//    ->group(function () {
//        Route::get('register', [RegisterController::class, 'create'])->name('register');
//        Route::post('register', [RegisterController::class, 'store']);
//    });
