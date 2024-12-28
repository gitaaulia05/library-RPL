<?php

namespace App\Livewire;

use Livewire\Component;
use App\Services\BukuServices;
use App\Services\AnggotaServices;
use Illuminate\Support\Facades\Http;

class PinjamBukuLive extends Component
{
    public $slug ='';
    public $search ='';
    public $bukuService;
    public $data;
    public $session;

    public $searchAnggota;
    public $hasilAnggota;

    public $anggotaCheck=[];
    
    public function mount ($slug , BukuServices $bukuService , AnggotaServices $anggotaService) {
        $this->slug = $slug;

        $this->data = $bukuService->detail_data($this->slug);
        $this->session = session('Authorization');
        $this->searchAnggota = $anggotaService->search();
    }

    public function FindAnggota(){

 
        $url = 'http://api-library.test/api/anggota';

        if(!empty($this->search)){
            $url .= '?nama='.urlencode($this->search);
        }

        $response = Http::withHeaders([
            'Authorization' => 'Bearer '.$this->session
        ])->get($url);

        $this->hasilAnggota = $response->successful() ? $response->json('data') : null;
            
        foreach($this->hasilAnggota as $anggota){
            $this->anggotaCheck[$anggota['id_anggota']] = $this->anggotaCheck[$anggota['id_anggota']] ?? false;
        }
     
    }


    public function anggotaCheckbox (){
       $selectedChecbox = array_filter($this->anggotaCheck, fn($value) => $value);

       if(!empty($selectedChecbox)){
            $selectedId = array_keys($selectedChecbox)[0];

        $anggota = collect($this->hasilAnggota)->firstWhere('id_anggota' , $selectedId);

        $this->search = $anggota['nama'] ?? '';

        $updateCheckbox =[];

        foreach($this->anggotaCheck as $id => $checked){
                $updateCheckbox[$id] = $id === $selectedId;

        }
        $this->anggotaCheck = $updateCheckbox;
       } else {
        $this->search ='';
       
       }


    }
    public function render()
    {
           
        return view('livewire.pinjam-buku-live'  , [
            "data" => $this->data,
            "hasil" => $this->hasilAnggota,
            "baseUrl" => "http://api-library.test/",
        ]);
    }
}
