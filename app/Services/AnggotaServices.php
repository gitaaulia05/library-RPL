<?php
namespace App\Services;

use Illuminate\Http\Request;
use App\Services\BukuServices;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;


class AnggotaServices
{

    protected $baseUrl;
    protected $token;

    public function __construct(){
        $this->baseUrl = config('app.api_base_url' , ENV('API_BASE_URL'));
        $this->token = session('Authorization');
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

        return $response->successful() ? $response->json('data') : null ;
    }


    public function search(){
        $response = Http::withHeaders([
            'Authorization' => 'Bearer '.$this->token
        ])->get('http://api-library.test/api/anggota');

        return $response->successful() ? $response->json('data') : null ;
    }

}