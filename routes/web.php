<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\LoginController;

Route::get('/login', [LoginController::class, 'index']);

use App\Http\Controllers\bagusController;

Route::get('/bagus', [bagusController::class, 'tampilkan']);

use App\Http\Controllers\dikyController;

Route::get('/diky', [dikyController::class, 'tampilkan']);
