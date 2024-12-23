<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\BukuServices;

class AnggotaPerpustakaan extends Controller
{

    public function __construct(BukuServices $bukuService){
        $this->bukuService = $bukuService;
        $this->petugas = $this->bukuService->getPetugas();
    }

    public function index(){
        return view('anggota.anggota' , [
            "title" => "Anggota| Perpustakaan",
            "Header" => "Anggota",
            "petugas" => $this->petugas['username'],
        ]);
    }

    public function detailAnggota(){
        return view('livewire.detail-anggota-live');
    }
    public function daftarAnggota(){
        return view('anggota.daftarAnggota');
    }
}
