<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    function index(){
        return view('admin.adminhome');
    }

    function login_index(){
        Session::forget('username');
        return view('admin.login');
    }

    function login(Request $request){
        $name = $request->input('username');
        $password = md5($request->input('password'));
        return redirect()->route('homeAdmin');
    }

    public function logout()
    {
        Session::flush();
        return redirect()->route('loginAdmin');
    }
}
