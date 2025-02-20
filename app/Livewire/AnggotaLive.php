<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use App\Services\BukuServices;
use App\Services\AnggotaServices;
use Illuminate\Support\Facades\Http;


use Illuminate\Support\Benchmark;
use Illuminate\Support\Facades\Session;



class AnggotaLive extends Component
{
    public $search = '';

    public $data_search = [];
    public $current_url;

    public $session = '';
    public $baseUrl = "http://api-library.test/api/anggota";

    protected $anggotaService;
    protected $bukuService;

    protected $ETag;

    public function mount (BukuServices $bukuService , AnggotaServices $anggotaService , Request $request){
        $this->bukuService = $bukuService;
        $this->petugas = $this->bukuService->getPetugas();

        $this->anggotaService = $anggotaService;

        $this->session = session('Authorization');
        $this->ETag = session('AnggotaCache');

        $this->data_search = $this->anggotaService->search();

       // dd($this->data_search);

    //    $haya =  Benchmark::measure([
    //         fn() =>  $this->data_search = $this->anggotaService->search(),
    //         fn() => $uhuy = $this->anggotaService->searchNoEtag(),
    //     ]);
    //     dd($haya);
        $this->current_url = request()->url();
        $this->addUrl2ToPagination();

    }


    public function addUrl2ToPagination(){
       
        foreach($this->data_search['meta']['links'] as $key => $value){
            $this->data_search['meta']['links'][$key]['url2'] =str_replace($this->baseUrl, $this->current_url , $value['url']) ;
        }
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
        $urls.="?page=".$page;
      
        $response = Http::withHeaders([
            'Authorization' => 'Bearer '.$this->session,
            'If-None-Match' => $this->ETag,
        ])->get($urls);

        $this->data_search = $response->successful() ? $response->json() : [];
        $this->addUrl2ToPagination();
    }

    public function UpdateSearchAnggota(){
        
         $url = $this->baseUrl;
        if(!empty($this->search)){
            $url .= '?nama='.urlencode($this->search);
        }
        $response = Http::withHeaders([
            'Authorization' => "Bearer ".$this->session,
            'If-None-Match' => $this->ETag,
        ])->get($url);
        $this->data_search =$response->json();     
        $this->addUrl2ToPagination();   
    }

    public function render()
    {   

        return view('livewire.anggota-live' , [
            "title" => "Anggota | Perpustakaan",
            "Header" => "Anggota",
            "anggota" => $this->data_search,
            "baseUrll" => "http://api-library.test/",
        ]);
    }
}
