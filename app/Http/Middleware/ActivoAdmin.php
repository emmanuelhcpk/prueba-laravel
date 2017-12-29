<?php

namespace App\Http\Middleware;

use App\Models\UsuarioAdministrador;
use Closure;
use Illuminate\Support\Facades\Auth;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;

class ActivoAdmin
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
        $usuario = Auth::user();
        if($usuario->activo){
            return $next($request);
        }
        else{
            return response()->json(['error'=>'Su usuario esta inactivo'],400);

        }

    }
}
