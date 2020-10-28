<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;

class AuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(!session('UserData')){//Cek status juga tapi belum
            $data_view['status'] = 'Silahkan Login Terlebih Dahulu';
            return redirect('/')->with($data_view);
        }
        return $next($request);
    }
}
