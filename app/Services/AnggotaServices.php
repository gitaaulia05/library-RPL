<?php
namespace App\Services;


use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Services\BukuServices;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;

use Illuminate\Support\Facades\Session;

class AnggotaServices
{

    protected $baseUrl;
    protected $token;
    protected $eTag;
    protected $newETag;

    public function __construct(){
        $this->baseUrl = config('app.api_base_url' , ENV('API_BASE_URL'));
        $this->token = session('Authorization');
        // if(!Cache::has('AnggotaCache')) {
        //     $this->eTag =session()->forget('EtagSearchAnggota') ?? '';
        // } else {
        //     $this->eTag =session('EtagSearchAnggota');
        // }
    
       $this->eTag = (string) "1739970892";

      
    }

    public function create(Request $request) {
        $response = Http::withHeaders([
            'Authorization' => 'Bearer '.$this->token
        ])->asMultipart()->attach(
            'gambar_anggota' , file_get_contents($request->file('gambar_anggota')->getRealPath()), $request->file('gambar_anggota')->getClientOriginalName()
        )->post('http://api-library.test/api/anggota' , [
            'nama' => $request->nama,
            'email' => $request->email,
        ]);

        return $response;
    }


    public function search(){
        
       // dd($this->eTag);
            $response = Http::withHeaders([
                'Authorization' => 'Bearer '.$this->token,
                //'If-None-Match' => $this->eTag,
            ])->get('http://api-library.test/api/anggota');

    //     $this->newETag = (string) ($response->json('headers.ETag') ?? '');


    //    // dd($response->status());
    //      if($response->status() == 304){
    //        //dd('kesana'); 
    //      return Cache::get('AnggotaCache');
         
    //     }


    //     if($response->json('headers.ETag') !== $this->eTag || !Cache::has('AnggotaCache')){
    //         //dd('kesaniii');
    //           Cache::put('AnggotaCache' , $response->json() , now()->addMinutes(10));
    //           session(['EtagSearchAnggota' => $this->newETag]);

    //          return $response->json();
    //         } 

                    return $response->json();

      

    }

    public function searchNoEtag(){
        $response = Http::withHeaders([
            'Authorization' => 'Bearer '.$this->token,
           
        ])->get('http://api-library.test/api/anggota');
        \Log::info("Status response search no etag(): ".$response->status());

          return $response->successful() ? $response->json() : null;

    }

    public function pinjamBuku(Request $request) {  
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' .$this->token , 
            'Accept' => 'application/json',
            'Content-type' => 'application/json'
        ])->post('http://api-library.test/api/pinjam-buku' ,[
            'slug' => $request->id_buku,
            'id_anggota' => $request->id_anggota
        ]);


        return $response;
    }

    public function searchPeminjaman($anggotaSlug) {
        $response = Http::withHeaders([
            "Authorization" => "Bearer ". $this->token,
        ])->get("http://api-library.test/api/peminjaman-anggota/".$anggotaSlug);
        return $response->successful() ? $response->json() : null;
    }

    public function detailAnggota($anggotaSlug) {
        $response = Http::withHeaders([
            'Authorization' => "Bearer " . $this->token,
        ])->get("http://api-library.test/api/detail-anggota/".$anggotaSlug);

        return $response->successful() ? $response->json('data') : null;

    }


    public function pengembalianBuku($idOrder) {
        $response = Http::withHeaders([
            'Authorization' => "Bearer ".$this->token,
        ])->get("http://api-library.test/api/pengembalian-buku/" . $idOrder);

       return  $response->successful() ? $response->json('data') : null;
    }


    public function simpanPengembalian(Request $request, $idOrder, array $sessionTelat){
        $response = Http::withHeaders([
            'Authorization' => "Bearer ". $this->token 
        ])->post("http://api-library.test/api/pengembalian-simpan/". $idOrder , [
            'id_order' => $request->id_order,
            'session_telat' => $sessionTelat,
        ]);
        return $response->successful() ? $response->json('data') : null;
    }


}