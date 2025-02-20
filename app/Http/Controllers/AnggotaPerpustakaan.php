<?php

namespace App\Http\Controllers;

use App\Models\order;
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

    public function detailAnggota($anggotaSlug){

        return view('anggota.detailAnggota' , [
            "title" => "Detail Anggota | Perpustakaan",
            "Header" => "Detail Anggota",
            "petugas" => $this->petugas['username'],
            "anggota" => $anggotaSlug,
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

        // dd($response->json('errors'));
        if($response->successful()) {
            return redirect('/anggota')->with('message-success' , 'Anggota Baru Berhasil Di tambahkan!');
        } else {
            $errors = $response->json('errors') ?? [];
            return redirect()->back()->withInput()->withErrors($errors)->with('message-error' , 'Data Gagal Disimpan');
        }
}


    public function pengembalianBuku($idOrder){
       
        return view('anggota.pengembalianBuku' , [
            "title" => "Pengembalian Buku | Perpustakaan",
            "Header" => "Pengembalian Buku",
            "petugas" => $this->petugas['username'],
          "id_order" => $idOrder,
        ]);
    }

    public function simpanPengembalian( $idOrder ){
        $valid = session('tidakValid');
       
      $session = session('telat');
      $data = session('data');
      $request = new Request($data);

      if(!$session){
        $response = $this->anggotaService->simpanPengembalian(new Request($data) , $idOrder, $session);
      } else {
        $response = $this->anggotaService->simpanPengembalian(new Request($data) , $idOrder, $session);
      }

      $getSlug = order::with(['anggota'])->where('id_order' , $idOrder)->first();

      return redirect('/detail-anggota/'.$getSlug->anggota->slug)->with('message-success' , 'Buku Berhasil Dikembalikan');
    }

   
}
