<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\PeminjamanController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/buku', [BukuController::class, 'index']);
Route::get('/buku/create', [BukuController::class, 'create']);
Route::post('/buku/store', [BukuController::class, 'store']);
Route::get('/buku/delete/{id}', [BukuController::class, 'destroy']);

Route::get('/anggota', [AnggotaController::class, 'index']);
Route::get('/anggota/create', [AnggotaController::class, 'create']);
Route::post('/anggota/store', [AnggotaController::class, 'store']);
Route::get('/anggota/edit/{id}', [AnggotaController::class, 'edit']);
Route::post('/anggota/update/{id}', [AnggotaController::class, 'update']);
Route::get('/anggota/delete/{id}', [AnggotaController::class, 'destroy']);

Route::get('/peminjaman/tambah', function () {
    return view('peminjaman.create');
});

Route::get('/peminjaman', [PeminjamanController::class, 'index']);
Route::post('/peminjaman/store', [PeminjamanController::class, 'store']);
Route::get('/peminjaman/kembalikan/{id}', [PeminjamanController::class, 'returnBook']);
Route::get('/peminjaman/hapus/{id}', [PeminjamanController::class, 'destroy']);
