<?php

namespace App\Livewire;

use App\Models\buku;
use Livewire\Component;
use App\Services\BukuServices;
use Illuminate\Support\Facades\Http;

class SearchBuku extends Component
{

        Protected $bukuServices;
        public $search = '';
        public $data_search = [];
        public $baseUrl = "http://api-library.test/api/buku";


        Public function mount(BukuServices $bukuServices){
            $this->bukuServices = $bukuServices;
        
            $this->data_search = $this->bukuServices->search_data();
         
        }

     

        public function UpdateSearchBuku(){
        
            $url = $this->baseUrl ;
                 if (!empty($this->search)) {
                $url .= "?nama_buku=" . urlencode($this->search);
            }
            $response = Http::get($url);
            $this->data_search = $response->successful() ? $response->json('data') : [];
        }        
        
        public function stokHabis(){
            dd("hm");
        }


        public function render()
        {

            return view('livewire.search-buku' , [
                "title" => "Buku | Perpustakaan",
                "Header" => "Buku",
                "data" => $this->data_search,
                "baseUrll" => "http://api-library.test/",
                "test" =>   $this->data_search = $this->bukuServices->search_data()
            ]);
        }
}
