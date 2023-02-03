<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function Symfony\Component\Mime\Header\get;
use Illuminate\Support\Facades\DB;


class PermissionMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $check)
    {
        if (auth()->check())
        {
            $permission = DB::table('role_permissions')->where('role_id' , '=', auth()->user()->role_id)
                ->where('permission', '=', $check)
                ->first();

            if ($permission)
            {
                return $next($request);
            }
            else{
                abort(403);
            }
        }
        else {
            abort(403);
        }
    }
}
