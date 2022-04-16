<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class kullanicioturum
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
       // dd(url('giris'));
        if(Session()->has("kull") && (url('giris')==$request->url()||url('kayit')==$request->url()))
        {
            return back();
        }

    }
}
