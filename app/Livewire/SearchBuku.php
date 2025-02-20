<?php

namespace App\Livewire;

use App\Models\buku;
use Livewire\Component;
use Illuminate\Http\Request;
use App\Services\BukuServices;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class SearchBuku extends Component
{

        Protected $bukuServices;
        public $search = '';
        public $data_search = [];
        public $response_data=[];
        public $dataLinks = [];

        public $baseUrl = "http://api-library.test/api/buku";
        public $current_url;
        public $params;

        public $session ='';
        public $buku_tersedia='';

        public $currentPage = 1;

        Public function mount(BukuServices $bukuServices , Request $request){
            $this->bukuServices = $bukuServices;
            $this->data_search = $this->bukuServices->search_data();
            $this->session = session('Authorization');

            $this->current_url = request()->url();
            $this->addUrl2ToPagination();
         
        }

        public function addUrl2ToPagination(){
            foreach($this->data_search['meta']['links'] as $key => $value){
                $this->data_search['meta']['links'][$key]['url2'] =str_replace($this->baseUrl, $this->current_url , $value['url']) ;
            }
            
        }

        public function ToogleBukuStokHabis(){
            $this->buku_tersedia =  $this->buku_tersedia  === 0 ? null : 0;
            $this->UpdateSearchBuku();
            $this->addUrl2ToPagination();
        }

        public function UpdateSearchBuku(){
            $url = $this->baseUrl;
            $this->params = [];

          
            if($this->buku_tersedia === 0 ){
              Session::flash('message-habis' , 'Stok Buku Dibawah ini Sedang Kosong!');
          }

            if(!is_null($this->buku_tersedia)){
                $this->params['buku_tersedia'] = $this->buku_tersedia;

                if($this->buku_tersedia === 0 ){
                    Session::flash('message-habis' , 'Stok Buku Dibawah ini Sedang Kosong!');
                }
            }


            if (!empty($this->search)) {
                  $this->params['nama_buku'] = $this->search;
                
           } 
       

           if(!empty($this->params)){
            $url .= "?" . http_build_query($this->params);
           }
  
           $response = Http::withHeaders([
               'Authorization' => 'Bearer '.$this->session
           ])->get($url);
         
           $this->data_search = $response->successful() ? $response->json() : [];
           $this->addUrl2ToPagination();
         
        }        

        public function goToPage($url){
        $parsedPage = parse_url($url);
            
            if(!isset($parsedPage['query'])){
                $page = 1;
            } else {
                parse_str($parsedPage['query'], $queryParams);
                $page = $queryParams['page'] ?? 1;
            }
        
            $urls = $this->baseUrl;

            if($this->buku_tersedia === 0){

            Session::flash('message-habis' , 'Stok Buku Dibawah ini Sedang Kosong!');
        }

            if($this->buku_tersedia === 0 ||!empty($this->search) ) {
                $urls.="?".http_build_query($this->params)."&page=".$page;
              

            } else {
                $urls.="?page=".$page;
            }
          
            $response = Http::withHeaders([
                'Authorization' => 'Bearer '.$this->session
            ])->get($urls);

            $this->data_search = $response->successful() ? $response->json() : [];
            $this->addUrl2ToPagination();
        }



        public function render()
        {

            // dd($this->data_search);
            return view('livewire.search-buku' , [
                "title" => "Buku | Perpustakaan",
                "Header" => "Buku",
                //"pagination" => $this->response_data,
                "data" => $this->data_search,
                "baseUrll" => "http://api-library.test/",
              
            ]);
        }
}
