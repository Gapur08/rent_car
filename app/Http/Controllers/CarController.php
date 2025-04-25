<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

Route::get('/cars', [CarController::class, 'index'])->name('cars.index');
class CarController extends Controller
{


}
