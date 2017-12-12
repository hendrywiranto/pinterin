<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    function index(){
    	return view('layouts.index');
    }

    function list_buku()
    {
        $books = DB::table('shop_selling')->where('shop_sell_sold', 0)->get();
        return view('layouts.listbuku',compact('books'));
    }

    function buy_buku(Request $request)
    {
        DB::table('shop_selling')
            ->where('shop_sell_id', $request->book_id)
            ->update(['shop_sell_sold' => 1]);
        return redirect()->route('listbuku');
    }
}