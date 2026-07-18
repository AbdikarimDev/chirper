<?php

use App\Http\Controllers\ChirpController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
Route::get('/',[ChirpController::class, 'index']); 
Route::post('/chirp',[ChirpController::class, 'store']); 
Route::get('/users',[UserController::class, 'index']); 
