<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\TokenMiddleware;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BarangPerpustakaan;
use App\Http\Controllers\AnggotaPerpustakaan;


Route::get('/', [LoginController::class, 'index']);
Route::post('/login-auth', [LoginController::class, 'login']);



Route::middleware(TokenMiddleware::class)->group(function () {

    Route::delete('/logout', [LoginController::class, 'logout']);
Route::get('/akun' , [LoginController::class, 'akun']);
Route::get('/buku', [BarangPerpustakaan::class, 'index']);
Route::get('/tambah-buku', [BarangPerpustakaan::class, 'tambahBuku']);
Route::post('/simpan-tambah-buku', [BarangPerpustakaan::class, 'SimpanBuku']);

Route::get('/detail-buku/{namaBukuSlug}', [BarangPerpustakaan::class, 'detailBuku']);

Route::get('/ubah-data-buku/{namaBukuSlug}', [BarangPerpustakaan::class, 'ubahData']);

// Route::post('/update-buku/{namaBukuSlug}', [BarangPerpustakaan::class, 'UpdateBuku'])->name('update.buku');
Route::post('/update-buku/{namaBukuSlug}', [BarangPerpustakaan::class, 'UpdateBuku'])->name('update.buku');

Route::delete('/detail-buku/{namaBukuSlug}', [BarangPerpustakaan::class, 'deleteBuku']);
Route::get('/pinjam-buku', [BarangPerpustakaan::class, 'pinjamBuku']);


//Anggota
Route::get('/anggota', [AnggotaPerpustakaan::class, 'index']);
Route::get('/detail-anggota', [AnggotaPerpustakaan::class, 'detailAnggota']);
Route::get('/daftar-anggota', [AnggotaPerpustakaan::class, 'daftarAnggota']);
});