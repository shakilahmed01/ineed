<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class MerchantRole
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
      if(Auth::user()->role_id == 3)
      {
        return redirect('/user/index');
      }
        return $next($request);
    }
}
