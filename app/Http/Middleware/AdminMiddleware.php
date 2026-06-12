<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next)
    {
        $user = Auth::user();

        if (! $user || ($user->role !== 'admin' && $user->role !== 'super_admin')) {
            return redirect()->route('admin.login')->with('error', 'Anda tidak memiliki akses administrator.');
        }

        return $next($request);
    }
}
