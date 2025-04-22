<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RegisterMentorController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MahasiswaController;

Route::get('/register', [RegisterController::class, 'show'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [HomeController::class, 'index'])->name('dashboard');



Route::get('/register', [RegisterController::class, 'show'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

Route::get('/registermentor', [RegisterMentorController::class, 'show'])->name('registermentor');
Route::post('/registermentor', [RegisterMentorController::class, 'store'])->name('registermentor.store');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.post');



Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa.index');
Route::get('/mahasiswa/{id}/edit', [MahasiswaController::class, 'edit'])->name('mahasiswa.edit');
Route::put('/mahasiswa/{id}/update', [MahasiswaController::class, 'update'])->name('mahasiswa.update');
Route::get('/mahasiswa/{id}/destroy', [MahasiswaController::class, 'destroy'])->name('mahasiswa.destroy');

Route::get('/mahasiswa/laporan', [LaporanController::class, 'index_laporan'])->name('laporan.index');
Route::get('/mahasiswa/izin', [LaporanController::class, 'index_izin'])->name('izin.index');
Route::post('/laporan', [LaporanController::class, 'store_laporan'])->name('laporan.store');
Route::post('/izin', [LaporanController::class, 'store_izin'])->name('izin.store');