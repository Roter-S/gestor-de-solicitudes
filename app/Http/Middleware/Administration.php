<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;

class Administration
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $role1, $role2)
    {
        if ($request->session()->exists('user')) {
            $roleId = User::select('role_id')->whereIn('role_id', [$role1, $role2])->where('email', session('user'))->first();
            if ($roleId) {
                return $next($request);
            }
        }
        return redirect(route('admin.login'));
    }
}
