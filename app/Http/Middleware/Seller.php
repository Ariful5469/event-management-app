<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Seller
{
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::user()->usertype !== 'seller') {
            return redirect('/');
        }
        return $next($request);
    }
}
