<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class EligibleForVoting
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $age = $request->query('age');

        if ($age === null) {
            return Redirect::route('age.missing');
        }

        if ($age >= 18) {
            return $next($request);
        }

        return Redirect::route('not-eligible')->with('message', 'You are not eligible to vote.');
    }
}
