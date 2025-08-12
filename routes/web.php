<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\KegiatanController;

// Route::get('/', function () {
//     return view('beranda');
// })->name('beranda');

Route::get('/', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class,'login'])->name('login.log');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout.dat');

Route::resource('anggota', AnggotaController::class);
Route::resource('kegiatan', KegiatanController::class);

Route::get('/jadwal', function () {
    return view('jadwal');
})->name('jadwal');

Route::get('/beranda', function () {
    return view('beranda');
})->name('beranda');

Route::get('/absensi', function () {
    return view('absensi');
})->name('absensi');


