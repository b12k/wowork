<?php

namespace App\Http\Middleware;

use App\Traits\HasResponses;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AccessCompany
{
    use HasResponses;

    public function handle(Request $request, Closure $next)
    {
        if (! auth()->user()->tokenCan('access:company')) {
            return $this->errorResponse(
                message: 'Forbidden',
                statusCode: Response::HTTP_FORBIDDEN,
            );
        }

        return $next($request);
    }
}
