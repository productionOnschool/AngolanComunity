<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class RedirectIfNotFound
{
    public function handle(Request $request, Closure $next)
    {
        // Check if the route exists
        try {
            $response = $next($request);
        } catch (NotFoundHttpException $exception) {
            return redirect('/'); // Redirect to homepage if route not found
        }

        return $response;
    }
}
