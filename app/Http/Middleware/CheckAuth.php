<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CheckAuth
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
        $flagLogin = DB::select('call sp_login(?,?)', [$request->username, md5($request->password)]);
        if ($flagLogin[0]->flag) {
            Session::put('username', $request->username);
            Session::put('user_id', $flagLogin[0]->id);
            Session::put('name', $flagLogin[0]->message);
        } else {
            Session::flash('error_message',$flagLogin[0]->message);
            return redirect()->route('login');
        }
        return $next($request);
    }
}
