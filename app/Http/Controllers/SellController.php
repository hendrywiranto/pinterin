<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SellController extends Controller
{
    function index()
    {
        $sellings = DB::table('selling')->where('selling_sold', 0)->get();
        return view('sell.listselling',compact('sellings'));
    }

    function buy_buku(Request $request)
    {
        DB::table('selling')
            ->where('selling_id', $request->book_id)
            ->update(['selling_sold' => 1]);
        return redirect()->route('listselling');
    }

    function add_selling()
    {
    	return view('sell.addselling');
    }

    function save_add_selling(Request $request)
    {
        $book_date =        date("Y-m-d");
        $book_sold =        0;
        $book_name =        $request->input('book_name');
        $book_author =      $request->input('book_author');
        $book_year =        $request->input('book_year');
        $book_publisher =   $request->input('book_publisher');
        $book_price =       $request->input('book_price');
        $book_details =     $request->input('book_details');
        $user_id =			session('user_id');
        DB::table('selling')
            ->insert(
                array(
                	'user_id' => $user_id,
                    'selling_date' => $book_date,
                    'selling_sold' => $book_sold,
                    'selling_book_name' => $book_name,
                    'selling_book_author' => $book_author,
                    'selling_book_year' => $book_year,
                    'selling_book_publisher' => $book_publisher,
                    'selling_price' => $book_price,
                    'selling_book_details' => $book_details
                ));
        return redirect()->route('listselling');
    }
}
