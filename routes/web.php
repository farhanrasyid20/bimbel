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

use App\Http\Controllers\dikyController;

Route::get('/diky', [dikyController::class, 'tampilkan']);

use App\Http\Controllers\PasswordController;

Route::get('/change-password', [PasswordController::class, 'showChangePasswordForm'])->name('password.change');
Route::post('/change-password', [PasswordController::class, 'updatePassword'])->name('password.update');

use App\Http\Controllers\ariefController;

Route::get('/arief', [ariefController::class, 'tampilkan']);

use App\Http\Controllers\farhanController;

Route::get('/farhan', [farhanController::class, 'tampilkan']);
