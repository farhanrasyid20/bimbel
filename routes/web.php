<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\LoginController;

Route::get('/login', [LoginController::class, 'index']);
