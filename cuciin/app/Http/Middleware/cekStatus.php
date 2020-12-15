<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\PseudoTypes\True_;

class cekStatus
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
        // // $user = User::where('email', $request->email)->first();
        // // if ($user->level == 'admin') {
        // //     return redirect('/admin');
        // // } elseif ($user->level == 'user') {
        // //     return redirect('/homepage');
        // // }

        // return $next($request);
        if (Auth::check() && Auth::user()->isAdmin()) {
            return $next($request);
        }

        return redirect('/homepage');
    }
}
