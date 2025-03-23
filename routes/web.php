<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


use App\Http\Controllers\loginController;

Route::get('/login', [loginController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [loginController::class, 'login'])->name('login');

Route::get('/data_profil', function () {
    return "Data Profil";
});

Route::get('/profil_guru', function () {
    return "Profil Guru";
});

Route::get('/profil_siswa', function () {
    return "Profil Siswa";
});

use App\Http\Controllers\bagusController;

Route::get('/bagus', [bagusController::class, 'tampilkan']);
