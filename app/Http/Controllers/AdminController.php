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

    function logout()
    {
        Session::flush();
        return redirect()->route('loginAdmin');
    }

    function add_buku_index(){
        return view('admin.tambahbuku');
    }

    function add_buku(Request $request)
    {
        $book_date =        date("Y-m-d");
        $book_sold =        0;
        $book_name =        $request->input('book_name');
        $book_author =      $request->input('book_author');
        $book_year =        $request->input('book_year');
        $book_publisher =   $request->input('book_publisher');
        $book_price =       $request->input('book_price');
        DB::table('shop_selling')
            ->insert(
                array(
                    'shop_sell_date' => $book_date,
                    'shop_sell_sold' => $book_sold,
                    'shop_sell_book_name' => $book_name,
                    'shop_sell_book_author' => $book_author,
                    'shop_sell_book_year' => $book_year,
                    'shop_sell_book_publisher' => $book_publisher,
                    'shop_sell_price' => $book_price,
                ));
        return redirect()->route('listbukuAdmin');
    }

    function list_buku()
    {
        $books = DB::table('shop_selling')->get();
        return view('admin.listbuku',compact('books'));
    }
}