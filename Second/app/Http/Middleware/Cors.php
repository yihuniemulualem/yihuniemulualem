<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Cors
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        return $next($request);
       // ->header('Access-Controle-Allow-Origin','*')
       // ->header('Access-controle-Allow-Methods','GET,POST,PUP,DELETE,OPTIONS')
       // ->header('Access-Controle-Allow-Headers',
        //'X-requested-With','Content-Type','X-Token',
        //'X-Token-Auth','Authorization');
    }
}
