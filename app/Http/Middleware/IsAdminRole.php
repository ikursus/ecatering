<?php

namespace App\Http\Middleware;

use Closure;

class IsAdminRole
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
        // Semak request yang dibuat oleh pengguna.
        // Semak adakah pengguna mempunyai role sebagai admin
        // Jika tidak mempunyai role admin, redirect ke halaman login
        if( ! $request->user()->isAdmin() )
        {
          return redirect('login');
        }

        // Jika pengguna mempunyai role admin, redirect ke request
        // yang dipohon
        return $next($request);
    }
}
