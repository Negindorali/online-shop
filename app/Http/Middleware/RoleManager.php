<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RoleManager
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, string $scope ='')
    {
        $scopes = json_decode(Auth::user()->role->scope);
        if (!in_array($scope, $scopes))
            abort(403);
        return $next($request);
    }
}
