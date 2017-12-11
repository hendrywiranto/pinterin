<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    function index(){
        Session::forget('admin');
    	return view('auth.login');
    }

    function login(Request $request){
        $name = $request->input('username');
        $password = md5($request->input('password'));
        return redirect()->route('home');
    }

    public function logout()
    {
        Session::flush();
        return redirect()->route('login');
    }

    function register_index(){
    	return view('auth.register');
    }

    function register(Request $request){
        $name = $request->input('username');
        $password = md5($request->input('password'));
        $fullname = $request->input('fullname');
        $address = $request->input('address');
        $phone = $request->input('phone');
        DB::table('user')
            ->insert(
                array(
                    'user_name' => $name,
                    'user_password' => $password,
                    'user_full_name' => $fullname,
                    'user_alamat' => $address,
                    'user_phone' => $phone,
                ));
        return redirect()->route('login');
    }
}
