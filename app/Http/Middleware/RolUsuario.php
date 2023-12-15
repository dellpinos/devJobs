<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RolUsuario
{
    /**
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Si el rol no es 2 (recruiter) redireccionar al usuario
        if($request->user()->rol !== 2) {
            return redirect()->route('home');
        }
        return $next($request);
    }
}
