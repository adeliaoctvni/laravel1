<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PengembalianController;
use App\Http\Controllers\RakController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('template.master');
})->name('blank_page');

// Route::get('/', [AuthorController::class, 'index'])->name('index');
Route::get('/anggota', [AnggotaController::class, 'create'])->name('anggota');
Route::get('/buku', [BukuController::class, 'create'])->name('buku');
Route::get('/petugas', [PetugasController::class, 'create'])->name('petugas');
Route::get('/Peminjaman', [PeminjamanController::class, 'create'])->name('Peminjaman');
Route::get('/Pengembalian', [PengembalianController::class, 'create'])->name('Pengembalian');
Route::get('/Peminjaman', [PeminjamanController::class, 'create'])->name('Peminjaman');
Route::get('/Rak', [RakController::class, 'create'])->name('Rak');