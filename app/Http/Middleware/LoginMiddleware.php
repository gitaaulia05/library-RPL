<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Petugas;

class LoginMiddleware
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
        $restrictRoute = ['/' , '/login-auth'];
        if($petugas && in_array($request->path() , $restrictRoute)) {
            return redirect()->back();
        }
        return $next($request);
    }
}
