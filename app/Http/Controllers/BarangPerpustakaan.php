<?php

namespace App\Http\Controllers;

use App\Models\buku;
use Illuminate\Http\Request;
use App\Services\BukuServices;
use App\Services\AnggotaServices;
use Illuminate\Http\JsonResponse;
use App\Http\Resources\BukuResource;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use App\Http\Requests\BukuCreateRequest;


class BarangPerpustakaan extends Controller
{
      

    public function __construct(BukuServices $bukuService , AnggotaServices $anggotaService){
            $this->bukuService = $bukuService;
            $this->petugas = $this->bukuService->getPetugas();

            $this->anggotaService = $anggotaService;
    }

    public function index(){
     
            return view('buku.main' , [
                "title" => "Buku | Perpustakaan",
                "Header" => "Buku",
                "petugas" => $this->petugas['username'],
            ]);
    }

    public function tambahBuku(){
        return view('buku.tambahBuku' , [
            "title" => "Tambah Buku | Perpustakaan",
            "Header" => "Tambah Buku",
            "petugas" => $this->petugas['username'],
        ]);
    }

    public function SimpanBuku(Request $request){
       $response = $this->bukuService->create_data($request);
        if($response){
            return redirect('/buku')->with('message-success' , "Data Buku Baru Berhasil Dibuat!");
        } else {
            return redirect()->back();
        }

    }

    public function ScanBuku(){
        return view('buku.scanBuku'  , [
            "title" => "Scanner Buku | Perpustakaan",
            "Header" => "Scanner Buku",
            "petugas" => $this->petugas['username'],
        ]);
    }

    public function detailBuku($namaBukuSlug){
        $response = $this->bukuService->detail_data($namaBukuSlug);

        return view('buku.detailBuku'  , [
            "title" => "Detail Buku | Perpustakaan",
            "Header" => "Detail Buku",
            "data" => $response, 
           
            "petugas" => $this->petugas['username'],
            "urlBase" => "http://api-library.test/",
            
        ]);
}

    public function ubahData($namaBukuSlug){

        $response = $this->bukuService->detail_data($namaBukuSlug);
         
        return view('buku.UbahBuku' , [
            "title" => "Ubah Data Buku | Perpustakaan",
            "Header" => "Ubah Data Buku",
            "data" => $response, 
            "petugas" => $this->petugas['username'],
        ]
    );
    }

    public function UpdateBuku( $namaBukuSlug, Request $request ){

        $response = $this->bukuService->updateBuku($namaBukuSlug, $request);
        if($response){
            return redirect('/buku')->with('message-success' , "Data Buku Baru Berhasil Dibuat!");
        } else {
          
            return redirect()->back()->with('message-fail' , "Data Gagal Diubah!");
        }

    }

    public function deleteBuku($namaBukuSlug){
        // dd("hm");
        $response = $this->bukuService->delete_data($namaBukuSlug);

        if($response){
            return redirect('/buku')->with("message-success" , "Buku Berhasil Dihapus");
        } else {
            return redirect()->back();
        }

    }



    public function pinjamBuku($namaBukuSlug){

        return view('buku.pinjamBuku' , [
            "title" => "Peminjaman Buku | Perpustakaan",
            "Header" => "Peminjaman Buku",
            "slug" => $namaBukuSlug,
            "petugas" => $this->petugas['username'],
        ]
    );
}

    public function StorePinjam(){
        $data = session('pinjamBuku');
        if(empty($data)){
            return redirect()->back()->with('message-error' ,'Tidak Ada Data Peminjam yang Valid');
        }

        $request = new Request($data);

        $response = $this->anggotaService->pinjamBuku(new Request($data));
        if($response) {
            return redirect('/buku')->with('message-success' , 'Peminjaman berhasil');
           session()->forget('pinjamBuku');
            
        } else {
            return redirect()->back();
            session()->forget('pinjamBuku');
        }
    }


  
}
