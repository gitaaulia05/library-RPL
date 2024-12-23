<?php

namespace App\Livewire;

use App\Models\buku;
use Livewire\Component;
use App\Services\BukuServices;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class SearchBuku extends Component
{

        Protected $bukuServices;
        public $search = '';
        public $data_search = [];
        public $baseUrl = "http://api-library.test/api/buku";

        public $session ='';
        public $buku_tersedia='';

        Public function mount(BukuServices $bukuServices){
            $this->bukuServices = $bukuServices;
            $this->data_search = $this->bukuServices->search_data();
            $this->session = session('Authorization');
         
        }

        public function ToogleBukuStokHabis(){
            $this->buku_tersedia =  $this->buku_tersedia  === 0 ? null : 0;

            $this->UpdateSearchBuku();
        }

        public function UpdateSearchBuku(){
            $url = $this->baseUrl;
            $params = [];

            if(!is_null($this->buku_tersedia)){
                $params['buku_tersedia'] = $this->buku_tersedia;

                if($this->buku_tersedia === 0 ){
                    Session::flash('message-habis' , 'Stok Buku Dibawah ini Sedang Kosong!');
                }
            }


            if (!empty($this->search)) {
                  $params['nama_buku'] = $this->search;
           }

           if(!empty($params)){
            $url .= "?" . http_build_query($params);
           }
  
           $response = Http::withHeaders([
               'Authorization' => 'Bearer '.$this->session
           ])->get($url);

           $this->data_search = $response->successful() ? $response->json('data') : [];

           
        }        

        public function render()
        {
            return view('livewire.search-buku' , [
                "title" => "Buku | Perpustakaan",
                "Header" => "Buku",
                "data" => $this->data_search,
                "baseUrll" => "http://api-library.test/",
              
            ]);
        }
}
