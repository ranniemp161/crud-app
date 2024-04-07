<?php

use App\Http\Controllers\UseController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home');
});

Route::post('/register', [UseController::class, 'register']);