<?php
namespace App\Services;

use Illuminate\Http\Request;
use App\Services\BukuServices;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;


class BukuServices
{
    protected $baseUrl;
    protected $token;

    public function __construct(){
            $this->baseUrl = config('app.api_base_url' , ENV('API_BASE_URL'));
            $this->token = session('Authorization');
    }

   

    public function login(Request  $request){
        $response = Http::post('http://api-library.test/api/petugas/login' , [
            'username' => $request->username,
            'password' => $request->password
        ]);
        return $response->successful() ? $response->json('data') : null;
    }


    public function getPetugas(){
 
        $response = Http::withHeaders([
            'Authorization' => 'Bearer '. $this->token
        ])->get('http://api-library.test/api/petugas/saatIni');
        return $response->successful() ? $response->json('data') : null;

        Log::info('Authorization Header dikirim:', ['Authorization' => 'Bearer ' . $token]);
    }

        public function logout(Request $request){
            $response = Http::withHeaders([
                'Authorization' => "Bearer ".$this->token,
            ])->delete('http://api-library.test/api/petugas/logout');
    
            return $response->successful() ? $response->json('data') : null;
        }

        public function detail_data($namaBukuSlug){
            $response = Http::withHeaders([
                'Authorization' => "Bearer ". $this->token,
            ])->get("http://api-library.test/api/buku/$namaBukuSlug");

            return $response->successful() ? $response->json('data') : null;
        }

    public function create_data(Request $request){
        $response = Http::withHeaders([
            'Authorization' => "Bearer ".$this->token,
        ])->asMultipart()->attach(
            'gambar_buku', file_get_contents($request->file('gambar_buku')->getRealPath()),$request->file('gambar_buku')->getClientOriginalName()
        )->post('http://api-library.test/api/buku' , [
            'nama_buku' => $request->nama_buku,
            'nama_penulis' => $request->nama_penulis,
            'nama_penerbit' => $request->nama_penerbit,
            'jumlah_buku' => $request->jumlah_buku,
            'buku_tersedia' => $request->buku_tersedia,
            'tanggal_masuk_buku' => $request->tanggal_masuk_buku,
            'update_terakhir' => $request->update_terakhir,
        ]);
        return $response->successful() ? $response->json('data') : null;
    }

    Public function search_data(){
            $response = Http::withHeaders([
                'Authorization' => "Bearer ".$this->token,
            ])->get('http://api-library.test/api/buku');
            
            return $response->successful() ? $response->json('data') : null;
    }  



    public function updateBuku( $namaBukuSlug, Request $request  ){
        $response = Http::withHeaders([
            'Authorization' => 'Bearer '. $this->token
        ])->asMultipart()->attach(
            'gambar_buku', 
            file_get_contents($request->file('gambar_buku')->getRealPath()), 
            $request->file('gambar_buku')->getClientOriginalName()
        )->post("http://api-library.test/api/buku/$namaBukuSlug", [
            'nama_buku' => $request->nama_buku,
            'nama_penulis' => $request->nama_penulis,
            'nama_penerbit' => $request->nama_penerbit,
            'jumlah_buku' => $request->jumlah_buku,
            'buku_tersedia' => $request->buku_tersedia,
            'tanggal_masuk_buku' => $request->tanggal_masuk_buku,
            'update_terakhir' => $request->update_terakhir,
        ]);
       
       
        return $response->successful() ? $response->json('data') : null;

        \Log::info('Sending request with: ', [
            'nama_buku' => $request->nama_buku,
            'gambar_buku' => $request->file('gambar_buku')->getClientOriginalName(),
        ]);
       
    }


    Public function delete_data($namaBukuSlug){
        $response = Http::withHeaders([
            'Authorization' => 'Bearer '.$this->token,
        ])->delete("http://api-library.test/api/buku/$namaBukuSlug");
        return $response->successful() ? $response->json('data') : null;
    }
  
}
