<?php

namespace App\Http\Middleware;

use Closure;

class age
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
        if($request->input('age')<20)
        {
            return redirect('/');
        }
        else{
            echo "valid users";
        }
        return $next($request);
    }
}
