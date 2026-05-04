<?php
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/halo', function () {
    return "Halo, selamat datang di Praktikum Pemrograman Web UIN Salatiga!";
});

Route::get('/profil/Dani', function () {
    return 'Ini adalah halaman profil: Dani';
});


// Route mengarah ke method index
Route::get('/mahasiswa', [MahasiswaController::class, 'index']);


// Route mengarah ke method detail dengan parameter
Route::get('/mahasiswa/{nim}', [MahasiswaController::class, 'detail']);

// Route mengarah ke method index
Route::get('/Dosen', [DosenController::class, 'index']);


// Route mengarah ke method detail dengan parameter
Route::get('/Dosen/037', [DosenController::class, 'detail']);

Route::get('/beranda', function () {
    return view('beranda');
});