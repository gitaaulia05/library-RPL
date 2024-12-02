<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarangPerpustakaan extends Controller
{
    public function index(){
            return view('main');
    }

    public function detailBuku(){
        return view('detailBuku');
}
        public function pinjamBuku(){
            return view('pinjamBuku');
    }
}
