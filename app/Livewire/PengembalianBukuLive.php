<?php

namespace App\Livewire;


use Carbon\Carbon;
use Livewire\Component;
use App\Services\AnggotaServices;
use Illuminate\Support\Facades\Session;

class PengembalianBukuLive extends Component
{
    protected $anggotaService;

    public $baseUrl = "http://api-library.test/";
    public $late;

    public $idOrder;
    public $data_pengembalian=[];

    //wire model
    public $tanggalDipinjam;
    public $datePengembalian;

    public $dataSession =[];


    public function mount(AnggotaServices $anggotaService, $idOrder ) {

    
        $this->idOrder = $idOrder;
        $this->dataSession = [
            'id_order' => $this->idOrder
        ];
     
        $this->anggotaService = $anggotaService;
        $this->data_pengembalian = $this->anggotaService->pengembalianBuku($this->idOrder);

        if(!isset($this->data_pengembalian['detail_order'][0]['buku_dikembalikan']) || $this->data_pengembalian['detail_order'][0]['buku_dikembalikan'] != 0 ) {
            $this->redirect(url()->previous());
            return;
        }

                // SET TANGGAL DIPINJAM DAN DIKEMBALIKAN
        $this->tanggalDipinjam = $this->data_pengembalian['detail_order'][0]['created_at'];
        $this->datePengembalian = Carbon::today()->format('Y-m-d');
     
        $this->late = Carbon::parse($this->tanggalDipinjam)->addDays(7)->format('Y-m-d');

        
        if($this->datePengembalian > $this->tanggalDipinjam){
            
            session::flash('telat-message' , 'Kredit Skor Dikembalikan 2 Hari Setelahnya ');
            session(['telat'=> ['telat' => 'true']]);
        }
    
        session(['data' => $this->dataSession]);
    
    }

    public function pengembalianCheck(){

        if($this->datePengembalian < $this->tanggalDipinjam){
            session::flash('message-error' , 'Tanggal pengembalian Tidak valid');
            session(['tidakValid' => ['valid' => 'false']]);
        }

        if($this->datePengembalian > $this->late) {
            session::flash('telat-message' , 'Kredit Skor Dikembalikan 2 Hari Setelahnya');
        session(['telat'=>['telat' => 'true']]);
        }  
        else {
            session()->forget(['tidakValid', 'telat']);
        }
        
        session(['data' => $this->dataSession]);
    }
    public function render()
    {
         
            return view('livewire.pengembalian-buku-live' , [
                "title" => "Pengembalian Buku | Perpustakaan",
                "Header" => "Pengembalian Buku",
                "data" => $this->data_pengembalian,
                
            ]);
         
      
    }
}
