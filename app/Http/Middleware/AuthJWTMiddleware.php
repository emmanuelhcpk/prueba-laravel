<?php

namespace App\Http\Middleware;

use Closure;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;

class AuthJWTMiddleware
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
        $token = $request->header('Authorization');
        $token = str_replace('Bearer ','',$token);
        try{
            $user = JWTAuth::toUser($token);
            $request->user=$user;
            return $next($request);
        }
        catch(JWTException $e){
            return response()->json(['error'=>'Token de atenticacion invalido'],402);
        }

    }
}
