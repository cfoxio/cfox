<?php

namespace App\Http\Middleware;

use Closure;

class AuthenticateUserForClan
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user = $request->user();
        $clan = request()->route()->parameters()['clan'];

        // Check if user is logged in
        if (!$user) {
          return redirect(route('login'));
        }

        // Check if user is authorized to access requested clan
        if (!$user->clans()->contains($clan)) {
            return redirect(route('home'));
        }
        return $next($request);
    }
}
