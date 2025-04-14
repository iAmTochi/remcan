<?php

namespace App\Http\Middleware;

use Carbon\Carbon;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckLaunchDate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Set the launch date
        $launchDate = Carbon::create('2025-05-01');

        // Check if the current date is after the launch date
        if (now()->lessThan($launchDate)) {
            return response()->view('coming-soon');
        }

        return $next($request);
    }
}
