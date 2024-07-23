<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimalController;

Route::get('/', [AnimalController::class, 'index']);
Route::resource('animals', AnimalController::class);
