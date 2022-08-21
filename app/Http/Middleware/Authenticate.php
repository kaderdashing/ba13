<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    //$url = route('/');

    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {   //si l'utilisateur n'as pas droit de ce connecter on entre dans la fonction
        if (! $request->expectsJson()) {
          //  return route('login');
          // faire la redirection a la page racine (la return route login est pour retourner la page login par defaut)
          return property_exists($this, 'redirectTo') ? $this->redirectTo : '/'; 
        }
    }
}

 
// Generating Redirects...

