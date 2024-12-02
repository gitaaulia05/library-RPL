<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnggotaPerpustakaan extends Controller
{
    public function index(){
        return view('anggota.anggota');
    }

    public function detailAnggota(){
        return view('livewire.detail-anggota-live');
    }
    public function daftarAnggota(){
        return view('anggota.daftarAnggota');
    }
}
