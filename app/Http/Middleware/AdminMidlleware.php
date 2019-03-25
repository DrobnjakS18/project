<?php

namespace App\Http\Middleware;

use Closure;

class AdminMidlleware
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
        if(session('user')){
            if(session('user')->naziv == 'admin')
            {
                return $next($request);

            }else{

                return abort('404');
            }

        }else{

            return abort('404');
        }


    }
}
