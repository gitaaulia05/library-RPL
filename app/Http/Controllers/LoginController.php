<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\BukuServices;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{

    public function __construct(BukuServices $bukuService){
        $this->bukuService = $bukuService;
        $this->petugas = $this->bukuService->getPetugas();
}

    public function index(){
        return view('login.login' ,[
            'title' => 'LOGIN | Perpustakaan'
        ]);
    }
    
    public function login(Request $request){
        $response = $this->bukuService->login($request);


            if($response){
                $token = $response['token'] ?? null ;

                if($token) {
                session(['Authorization' => $token]);
                return redirect('/buku');
                
                } else {
                    return redirect('/')->with("message-error" , "Username atau Password Salah!");
                }

               
          
            } else {
                return redirect('/')->with("message-error" , "Username atau Password Salah!");
            }
        
    }

    public function logout(Request $request){
        $response = $this->bukuService->logout($request);
        if($response){
            return redirect('/');
        } else {
            return redirect('/buku')->with("message-error" , "Logout Gagal !");
        }
    }

    public function akun(){
        return view ('login.akun' , [
            "title" => "Akun Petugas | Perpustakaan",
            "Header" => "Akun Petugas",
            "petugas" => $this->petugas['username'],
        ]);
    }
}
