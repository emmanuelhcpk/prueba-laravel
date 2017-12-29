<?php

namespace App\Http\Middleware;

use App\Models\OperacionAuditoria;
use App\Models\UsuarioAdministrador;
use Closure;
use Illuminate\Support\Facades\Auth;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;

class AuditoriaAdmin
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
        if ($request->isMethod('post') || $request->isMethod('put')|| $request->isMethod('patch')|| $request->isMethod('delete')) {
            //if ($request->is('casos/*') || $request->is('vehiculos/*')) {
                $auditoria = new OperacionAuditoria();
                $auditoria->peticion =  http_build_query($request->all());
                $auditoria->ruta =  $request->url();
                $auditoria->usuario_administracion_id =  Auth::id();
                $auditoria->accion =  $request->method();
                $auditoria->save();
            //}
        }
        return $next($request);

    }
}
