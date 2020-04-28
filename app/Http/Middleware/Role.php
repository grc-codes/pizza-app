<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use App\Role as RoleObject;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, ...$roles)
    {
        $user = Auth::user();
        foreach($roles as $role) {
            $role_object = RoleObject::where('title', $role)->first();
            if($user->roles->contains($role_object)) {
                return $next($request);
            } else {
                return redirect('/admin');
            }
        }
        if(!Auth::check()) {
            return redirect('/login');
        }
        return $next($request);
    }
}
