<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\BukuServices;
use App\Services\AnggotaServices;

class AnggotaPerpustakaan extends Controller
{

    public function __construct(BukuServices $bukuService , AnggotaServices $anggotaService){
        $this->bukuService = $bukuService;
        $this->petugas = $this->bukuService->getPetugas();

        $this->anggotaService = $anggotaService;
    }

    public function index(){
        return view('anggota.anggota' , [
            "title" => "Anggota | Perpustakaan",
            "Header" => "Anggota",
            "petugas" => $this->petugas['username'],
        ]);
    }

    public function detailAnggota(){
        return view('livewire.detail-anggota-live' , [
            "title" => "Anggota | Perpustakaan",
            "Header" => "Anggota",
            "petugas" => $this->petugas['username'],
        ]);
    }
    public function daftarAnggota(){
        return view('anggota.daftarAnggota' , [
            "title" => "Daftar Anggota | Perpustakaan",
            "Header" => "Daftar Anggota ",
            "petugas" => $this->petugas['username'],
        ]);
    }

    public function createAnggota(Request $request){
        $response = $this->anggotaService->create($request);
        if($response) {
            return redirect('/anggota')->with('message-success' , 'Anggota Baru Berhasil Di tambahkan!');
        } else {
            return redirect()->back();
        }
    }


    public function pengembalianBuku(){
        return view('anggota.pengembalianBuku' , [
            "title" => "Pengembalian Buku | Perpustakaan",
            "Header" => "Pengembalian Buku",
            "petugas" => $this->petugas['username'],
        ]);
    }
}
