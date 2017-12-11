<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CheckAuthAdmin
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
        $flagLogin = DB::select('call sp_login_admin(?,?)', [$request->username, md5($request->password)]);
        if ($flagLogin[0]->flag) {
            Session::put('admin', $request->username);
            Session::put('name', $flagLogin[0]->message);
        } else {
            Session::flash('error_message',$flagLogin[0]->message);
            return redirect()->route('loginAdmin');
        }
        return $next($request);
    }
}