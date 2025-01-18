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

                // SET TANGGAL DIPINJAM DAN DIKEMBALIKAN
        $this->tanggalDipinjam = $this->data_pengembalian['detail_order'][0]['created_at'];
        $this->datePengembalian = Carbon::today()->format('Y-m-d');
        $this->late = Carbon::parse($this->tanggalDipinjam)->addDays(7)->format('Y-m-d');

        
        if($this->datePengembalian > $this->tanggalDipinjam){
            session::flash('message-error-warning' , 'Kredit Skor Berkurang 10 poin ');
            session(['telat'=> ['telat' => 'true']]);
        }
    
        session(['data' => $this->dataSession]);
    
    }

    public function pengembalianCheck(){

        if($this->datePengembalian < $this->tanggalDipinjam){
            session::flash('message-error' , 'Tanggal pengembalian Tidak valid');
           
        }

        if($this->datePengembalian > $this->late) {
            session::flash('telat-message' , 'Kredit Skor Berkurang 10 poin ');
        session(['telat'=>['telat' => 'true']]);
        }  
        
        session(['data' => $this->dataSession]);
    }
    public function render()
    {
            // dd($this->data_pengembalian);
        return view('livewire.pengembalian-buku-live' , [
            "title" => "Pengembalian Buku | Perpustakaan",
            "Header" => "Pengembalian Buku",
            "data" => $this->data_pengembalian,
            
        ]);
    }
}
