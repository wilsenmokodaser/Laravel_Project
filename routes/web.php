<?php

use App\Http\Controllers\ProfileController;



use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/profile', [ProfileController::class, 'profile']);
Route::get('/about', [ProfileController::class, 'about']);

