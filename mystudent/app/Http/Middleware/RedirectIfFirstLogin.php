<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfFirstLogin
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check()) {
            $user = Auth::user();

            if ($user->first_login) {
                $user->first_login = false;
                $user->save();

                return redirect()->route('pretest.index');
            }
        }

        return $next($request);
    }
}
