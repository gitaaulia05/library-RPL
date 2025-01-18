<?php

namespace App\Livewire;

use Livewire\Component;
use App\Services\BukuServices;
use App\Services\AnggotaServices;
use Illuminate\Support\Facades\Http;

class AnggotaLive extends Component
{
    public $search = '';
    public $data_search = [];
    public $session = '';
    public $baseUrl;

    protected $anggotaService;
    protected $bukuService;

    public function mount (BukuServices $bukuService , AnggotaServices $anggotaService){
        $this->bukuService = $bukuService;
        $this->petugas = $this->bukuService->getPetugas();

        $this->anggotaService = $anggotaService;
        $this->session = session('Authorization');

        $this->data_search = $this->anggotaService->search();
        $this->baseUrl= "http://api-library.test/";
     
    }

    public function UpdateSearchAnggota(){
         $url = $this->baseUrl."api/anggota";
        if(!empty($this->search)){
            $url .= '?nama='.urlencode($this->search);
        }
        $response = Http::withHeaders([
            'Authorization' => "Bearer ".$this->session
        ])->get($url);
        $this->data_search = $response->successful() ? $response->json('data') : null;
         
    }
    public function render()
    {
       
        return view('livewire.anggota-live' , [
            "title" => "Anggota | Perpustakaan",
            "Header" => "Anggota",
            "anggota" => $this->data_search,
            "baseUrll" => $this->baseUrl,
        ]);
    }
}
