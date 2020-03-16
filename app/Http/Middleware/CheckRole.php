<?php

namespace App\Http\Middleware;

use Closure;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user = $request->user();
        if ($user->role_id == config('constant.role.user')) {
            return $next($request);
        } elseif ($user->role_id == config('constant.role.admin')) {
            return redirect()->route('admin');
        }
    }
}
