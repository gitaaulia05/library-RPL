<?php

namespace App\Http\Middleware;

use Log;

use Closure;
use App\Models\Petugas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
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
    
    $token = session('Authorization');

    $petugas = petugas::where('token', $token)->first();

    if($petugas){
        $request->headers->set('Authorization' , 'Bearer '.$token);
                return $next($request);
    } else {
        log::info('hilang' .$token);
        return redirect('/');
    }

  
    }

    
}
