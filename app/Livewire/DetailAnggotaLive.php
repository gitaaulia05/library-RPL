<?php

namespace App\Livewire;

use Livewire\Component;
use App\Services\AnggotaServices;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class DetailAnggotaLive extends Component
{
    protected $anggotaService;
    public $search = '';
    public $data = [];
    public $session;
    public $slug;
    public $buku_Blmdikembalikan;

    public $anggota = [];
    public $baseUrl = "http://api-library.test/api/peminjaman-anggota/";
    public $current_url;
    public $params;

    public function mount (AnggotaServices $anggotaService , $slug) {
        $this->anggotaService = $anggotaService;
         // ambil data sebelum di searching get data semua 
         $this->data = $this->anggotaService->searchPeminjaman($slug);
         $this->session = session('Authorization');
         $this->slug = $slug;
        
         $this->anggota = $this->anggotaService->detailAnggota($this->slug);
         $this->current_url = request()->url();
         $this->addUrl2ToPagination();

    }

    public function addUrl2ToPagination(){

           
                foreach($this->data['meta']['links'] as $key => $value){

                        $this->data['meta']['links'][$key]['url2'] =str_replace($this->baseUrl, $this->current_url , $value['url']);
               
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

        if($this->buku_Blmdikembalikan === 0){

            Session::flash('message-habis' , 'Buku Dibawah Belum Dikembalikan!');
        }
        
        if($this->buku_Blmdikembalikan === 0 || !empty($this->search)) {
            $urls.=$this->slug.'?'. http_build_query($this->params)."&page=".$page;
        } else {
            $urls.=$this->slug."?page=".$page;
        }
      
        $response = Http::withHeaders([
            'Authorization' => 'Bearer '.$this->session
        ])->get($urls);

        $this->data = $response->successful() ? $response->json() : [];
        $this->addUrl2ToPagination();
    }


    public function ToogleBukuDikembalikan(){
        $this->buku_Blmdikembalikan = $this->buku_Blmdikembalikan  === 0 ? null : 0;
        $this->SearchNamaBuku();
        $this->addUrl2ToPagination();
        
    }

    public function SearchNamaBuku(){
        $url = $this->baseUrl.$this->slug;
        $this->params = [];

        if(!is_null($this->buku_Blmdikembalikan)){
            $this->params['buku_dikembalikan'] = $this->buku_Blmdikembalikan;
            if($this->buku_Blmdikembalikan === 0){
                Session::flash('message-habis' , 'Buku Dibawah Belum Dikembalikan!');
            }else{
                Session:forget('message-habis');
            }
        }
        
        if(!empty($this->search)){
            $this->params['nama_buku'] = $this->search;
        } 
        if(!empty($this->params)) {
            $url .= '?' . http_build_query($this->params);
        }

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $this->session
        ])->get($url);

        $this->data = $response->successful() ? $response->json() : null ;
        $this->addUrl2ToPagination();
       
    }
    public function render()
    {

        return view('livewire.detail-anggota-live'  , [
            'data' => $this->data,
            'DataAnggota' => $this->anggota,
            'baseUrll' =>  "http://api-library.test/"
        ]);
    }




}
