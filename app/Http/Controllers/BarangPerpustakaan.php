<?php

namespace App\Http\Controllers;

use App\Models\buku;
use Illuminate\Http\Request;
use App\Services\BukuServices;
use Illuminate\Http\JsonResponse;
use App\Http\Resources\BukuResource;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use App\Http\Requests\BukuCreateRequest;


class BarangPerpustakaan extends Controller
{
      

    public function __construct(BukuServices $bukuService){
            $this->bukuService = $bukuService;
          
    }

    public function index(){

        $petugas = Auth::user();
            return view('main' , [
                "title" => "Buku | Perpustakaan",
                "Header" => "Buku",
                "petugas" => $petugas,
              
            ]);
    }

    public function tambahBuku(){
        return view('buku.tambahBuku' , [
            "title" => "Tambah Buku | Perpustakaan",
            "Header" => "Tambah Buku",
        ]);
    }

    public function SimpanBuku(Request $request){
       $response = $this->bukuService->create_data($request);

    
        if($response){
            return redirect('/')->with('message-success' , "Data Buku Baru Berhasil Dibuat!");
        } else {

            // dd($response->status(), $response->body());
            return redirect()->back();
        }

    }


    public function detailBuku($namaBukuSlug){
        
        $response = Http::get("http://api-library.test/api/buku/$namaBukuSlug");
        $data = $response->json('data');
       
        return view('detailBuku'  , [
            "title" => "Detail Buku | Perpustakaan",
            "Header" => "Detail Buku",
            "data" => $data, 
            "urlBase" => "http://api-library.test/",
            
        ]);
}
        public function pinjamBuku(){
            return view('pinjamBuku' , [
                "title" => "Peminjaman Buku | Perpustakaan",
                "Header" => "Peminjaman Buku",
            ]
        );
    }

    public function ubahData($namaBukuSlug){
        $response = Http::get("http://api-library.test/api/buku/$namaBukuSlug");
        $data = $response->json('data');

        return view('UbahBuku' , [
            "title" => "Ubah Data Buku | Perpustakaan",
            "Header" => "Ubah Data Buku",
            "data" => $data, 
        ]
    );
    }

    public function UpdateBuku( $namaBukuSlug, Request $request ){

        // dd($namaBukuSlug, $request->all());

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

    public function create(BukuCreateRequest $request): JsonResponse{
        $data = $request->validated();

        $buku = new buku($data);
        $buku->save();

        return (new BukuResource($buku))->response()->setStatusCode(201);
    }
}
