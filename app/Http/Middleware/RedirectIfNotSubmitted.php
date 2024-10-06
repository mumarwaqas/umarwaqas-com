<?php

namespace App\Http\Middleware;

use Closure;

class RedirectIfNotSubmitted
{
    public function handle($request, Closure $next)
    {
        if (!$request->session()->has('success')) {
            return redirect()->route('contact'); // Redirect to the contact page
        }
        return $next($request);
    }
}
