<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class VerifyUserAge
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
        if($request->age < 18){
            return response()->json([
                'msg' => [
                    'sumary' => 'Eres menor de edad',
                    'detail' => 'No puedes ingresar',
                ]
            ], 401);
        }

        return $next($request);
    }
}
