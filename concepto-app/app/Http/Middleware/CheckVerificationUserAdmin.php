<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckVerificationUserAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */

    public function handle(Request $request, Closure $next, $role): Response
    {
        // Verificar si el usuario está autenticado
        if (Auth::check()) {

            // Obtener el usuario autenticado
            $user = Auth::user();

            // Verificar si posee el rol adecuado
            if ($user->role === $role) {
                return $next($request);
            }
        }

        // Si no coincide, redirigimos al sitio web para usuarios comunes
        return redirect()
            ->route('web.home');
    }
}
