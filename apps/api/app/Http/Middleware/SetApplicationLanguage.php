<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SetApplicationLanguage
{
    public function handle(Request $request, Closure $next)
    {
        $requestedLanguage = $request->header('Content-Language', config('app.locale'));
        $canProvideRequestedLanguage = Str::of(config('app.supported_locales'))
            ->explode(',')
            ->map(fn ($item) => Str::of($item)->trim()->toString())
            ->contains($requestedLanguage);

        if ($canProvideRequestedLanguage) {
            app()->setLocale($requestedLanguage);
        }

        return $next($request);
    }
}
