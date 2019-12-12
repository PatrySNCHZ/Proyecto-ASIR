<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class EsAdmin {

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next) {
        
             if(!auth()->check() || !$request->User()->esAdmin()){
             return redirect('/');
            }else{
                return $next($request);
            }
    }
        
  /*      $user=Auth::user();
if(!$user->EsAdmin()){
	return redirect('/');
}

        
    }
*/
    
}