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

use App\Http\Controllers\NilaiController;

Route::get('/nilai', [NilaiController::class, 'index'])->name('nilai');


use Illuminate\Support\Facades\Auth;

Route::get('/kehadiran_siswa', function () {
    $kehadiran = [
        'Bahasa Indonesia' => collect([
            ['minggu' => 1, 'status' => 'Hadir'],
            ['minggu' => 2, 'status' => 'Izin'],
            ['minggu' => 3, 'status' => 'Sakit'],
            ['minggu' => 4, 'status' => '-'],
            ['minggu' => 5, 'status' => 'Hadir'],
        ]),
        'Matematika' => collect([
            ['minggu' => 1, 'status' => 'Alpha'],
            ['minggu' => 2, 'status' => 'Hadir'],
            ['minggu' => 3, 'status' => 'Hadir'],
            ['minggu' => 4, 'status' => 'Izin'],
            ['minggu' => 5, 'status' => 'Hadir'],
        ]),
        'Bahasa Inggris' => collect([
            ['minggu' => 1, 'status' => 'Hadir'],
            ['minggu' => 2, 'status' => 'Hadir'],
            ['minggu' => 3, 'status' => 'Hadir'],
            ['minggu' => 4, 'status' => 'Hadir'],
            ['minggu' => 5, 'status' => 'Alpha'],
        ]),
    ];

    return view('kehadiran_siswa', compact('kehadiran'));
})->name('kehadiran.siswa');

Route::get('/nilai_siswa', function () {
    $nilai = [
        'Bahasa Indonesia' => collect([
            ['minggu' => 1, 'nilai' => 80],
            ['minggu' => 2, 'nilai' => 75],
            ['minggu' => 3, 'nilai' => 90],
            ['minggu' => 4, 'nilai' => '-'],
            ['minggu' => 5, 'nilai' => 85],
        ]),
        'Matematika' => collect([
            ['minggu' => 1, 'nilai' => 70],
            ['minggu' => 2, 'nilai' => 80],
            ['minggu' => 3, 'nilai' => 85],
            ['minggu' => 4, 'nilai' => 78],
            ['minggu' => 5, 'nilai' => 92],
        ]),
        'Bahasa Inggris' => collect([
            ['minggu' => 1, 'nilai' => 88],
            ['minggu' => 2, 'nilai' => 75],
            ['minggu' => 3, 'nilai' => 95],
            ['minggu' => 4, 'nilai' => 80],
            ['minggu' => 5, 'nilai' => 85],
        ]),
    ];

    return view('nilai_siswa', compact('nilai'));
})->name('nilai.siswa');
