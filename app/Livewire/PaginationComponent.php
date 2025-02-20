<?php

namespace App\Livewire;

use Livewire\Component;

class PaginationComponent extends Component
{
    public $endpoint;
    public $data =[];
    public $links =[];
    public $meta =[];
    public $perPage;
    public $page ;
    public $session;

    public function mout($endpoint){
        $this->endpoint = $endpoint;
        $this->session = session('Authorization');
        $this->fetchData();
    }

    public function fetchData(){
        $response = Http::withHeaders([
            'Authorization' => "Bearer ".$this->session
        ])->get($this->endpoint);

        if($response->successful()){
            $result = $response->json();
            $this->data = $result['data'];
            $this->links = $result['meta']['links'];
            $this->meta = $result['meta'];
            $this->perpage = $result['meta']['per_page'];
         
        }
    }

    public function gotoPage($page){
        if($page >= 1 && $page <= $this->meta['last_page']){
            $this->page = $page;
            $this->fetchData();
        }
    }

    public function render()
    {
        return view('livewire.pagination-component');
    }
}
