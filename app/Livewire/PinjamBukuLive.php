<?php

namespace App\Livewire;

// use session;
use Livewire\Component;
use Illuminate\Http\Request;
use App\Services\BukuServices;
use App\Services\AnggotaServices;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class PinjamBukuLive extends Component
{
    public $slug ='';
    public $search ='';
    public $bukuService;
    public $data;
    public $session;

    public $searchAnggota;
    public $hasilAnggota;
    public $anggota;

    public $anggotaCheck=[];

    
    public function mount ($slug , BukuServices $bukuService , AnggotaServices $anggotaService) {
        $this->slug = $slug;

        $this->data = $bukuService->detail_data($this->slug);
        $this->session = session('Authorization');
        $this->searchAnggota = $anggotaService->search();

    }

    public function FindAnggota(){
        if(!empty($this->search)){
            $url = 'http://api-library.test/api/anggota';
            $url .= '?nama='.urlencode($this->search);
            $response = Http::withHeaders([
                'Authorization' => 'Bearer '.$this->session
            ])->get($url);

            $this->hasilAnggota = $response->successful() ? $response->json('data') : null;
       
            foreach($this->hasilAnggota as &$anggota){
     
                $this->anggotaCheck[$anggota['id_anggota']] = $this->anggotaCheck[$anggota['id_anggota']] ?? false;
    
                if( $anggota['credit_anggota']> 50) {
                    $anggota['onUp'] ="1";
                }  else {
                    $anggota['onUp'] = "2";    
                }
            }
        } else {
          $this->hasilAnggota = null;
          $this->search = '';

        }

     
    }


    public function anggotaCheckbox (){
       $selectedChecbox = array_filter($this->anggotaCheck, fn($value) => $value);

       if(count($selectedChecbox) > 1) {
        $lastSelected = array_key_last($selectedChecbox);
            $this->anggotaCheck = [$lastSelected => true];
           // dd($lastSelected);
            //session()->flash('message-error', 'Hanya boleh memilih satu anggota!');
       }
       
       if(!empty($selectedChecbox)){
            $selectedId = array_keys($selectedChecbox)[0];

        $this->anggota = collect($this->hasilAnggota)->firstWhere('id_anggota' , $selectedId);

        $this->search = $this->anggota['nama'] ?? '';

        $updateCheckbox =[];

        foreach($this->anggotaCheck as $id => $checked){
                $updateCheckbox[$id] = $id === $selectedId;
        }
       } else {
        $this->search ='';
       
       }

    }


    public function checkOnup(){

   
        if(empty($this->anggota['onUp'])) {
            session::flash('message-error' , 'Silahkan Pilih Nama Anggota Terlebih Dahulu');
        } elseif($this->anggota['onUp'] == 2) {
            session::flash('message-error' , 'Credit Skor Anggota Kurang');
        } else {
            $data= [
                'id_buku' => $this->slug,
                'id_anggota' => $this->anggota['id_anggota'],
            ];
            
            session()->put('pinjamBuku', $data);
            session()->save();

            //dd(session()->get('pinjamBuku'));

        }
    }

    public function render()
    {
        // dd($this->hasilAnggota);
        return view('livewire.pinjam-buku-live'  , [
            "data" => $this->data,
            "hasil" => $this->hasilAnggota,
            "baseUrl" => "http://api-library.test/",
        ]);
    }

}