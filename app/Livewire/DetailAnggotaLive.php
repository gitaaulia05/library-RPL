<?php

namespace App\Livewire;

use session;
use Livewire\Component;
use App\Services\AnggotaServices;
use Illuminate\Support\Facades\Http;

class DetailAnggotaLive extends Component
{
    protected $anggotaService;
    public $search = '';
    public $data = [];
    public $session;
    public $slug;
    public $anggota = [];
    public $baseUrl = "http://api-library.test/";

    public function mount (AnggotaServices $anggotaService , $slug) {
        $this->anggotaService = $anggotaService;
         // ambil data sebelum di searching get data semua 
         $this->data = $this->anggotaService->searchPeminjaman($slug);
         $this->session = session('Authorization');
         $this->slug = $slug;
        
         $this->anggota = $this->anggotaService->detailAnggota($this->slug);

    }

    public function SearchNamaBuku(){
        $url = $this->baseUrl."api/peminjaman-anggota/". $this->slug;
        $params = [];
        
        if(!empty($this->search)){
            $params['nama_buku'] = $this->search;
        } 
        if(!empty($params)) {
            $url .= '?' . http_build_query($params);
        }

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $this->session
        ])->get($url);

        $this->data = $response->successful() ? $response->json('data') : null ;

    }
    public function render()
    {
    
        return view('livewire.detail-anggota-live'  , [
            'data' => $this->data,
            'DataAnggota' => $this->anggota,
            'baseUrll' => $this->baseUrl
        ]);
    }
}
