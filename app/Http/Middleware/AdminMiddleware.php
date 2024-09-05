<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // Verifica se l'utente è autenticato e se è un admin
        if (Auth::check() && Auth::user()->is_admin) {
            return $next($request); // Consenti l'accesso
        }

        // Reindirizza a una pagina di errore o alla home se non è admin
        return redirect('/')->with('errorAdmin', 'Non hai accesso alla sezione Admin.');
    }
}
