<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangPerpustakaan;
use App\Http\Controllers\AnggotaPerpustakaan;

Route::get('/', [BarangPerpustakaan::class, 'index']);
Route::get('/detail-buku', [BarangPerpustakaan::class, 'detailBuku']);
Route::get('/pinjam-buku', [BarangPerpustakaan::class, 'pinjamBuku']);


//Anggota
Route::get('/anggota', [AnggotaPerpustakaan::class, 'index']);
Route::get('/detail-anggota', [AnggotaPerpustakaan::class, 'detailAnggota']);
Route::get('/daftar-anggota', [AnggotaPerpustakaan::class, 'daftarAnggota']);
