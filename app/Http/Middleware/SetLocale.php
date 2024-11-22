<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;

class SetLocale
{
    public function handle($request, Closure $next)
    {
        $locale = session('locale', config('app.locale')); // Default to app locale if not set
        App::setLocale($locale);
        
        return $next($request);
    }
}