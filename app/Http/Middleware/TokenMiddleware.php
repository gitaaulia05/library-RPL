<?php

namespace App\Http\Middleware;

use Log;
use Closure;
use App\Models\Petugas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class TokenMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        \Log::info('Session sebelum handle:', session()->all());

        $token = session('auth_token');

     

        if(!$token) {
            return redirect()->back()->with("message-error" , 'Silakan login terlebih dahulu.');
    
        }

        $petugas = Petugas::where('token' , $token)->first();

        if(!$petugas){
            return redirect()->back()->with("message-error" , 'Sesi anda berakhir silahkan login');;
        }

        Auth::login($petugas);

        Log::info('Session saat ini:', session()->all());

        return $next($request);
    }
}
