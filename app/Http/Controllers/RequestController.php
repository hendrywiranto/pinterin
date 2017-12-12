<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RequestController extends Controller
{
    function index()
    {
        $requests = DB::table('request')->where('request_sold', 0)->get();
        return view('request.listrequest',compact('requests'));
    }

    function sell_buku(Request $request)
    {
        DB::table('request')
            ->where('request_id', $request->book_id)
            ->update(['request_sold' => 1]);
        return redirect()->route('listbuku');
    }

    function add_request()
    {
    	return view('request.addrequest');
    }

    function save_add_request(Request $request)
    {
        $book_date =        date("Y-m-d");
        $book_sold =        0;
        $book_name =        $request->input('book_name');
        $book_author =      $request->input('book_author');
        $book_year =        $request->input('book_year');
        $book_publisher =   $request->input('book_publisher');
        $book_price =       $request->input('book_price');
        DB::table('request')
            ->insert(
                array(
                    'request_date' => $book_date,
                    'request_sold' => $book_sold,
                    'request_book_name' => $book_name,
                    'request_book_author' => $book_author,
                    'request_book_year' => $book_year,
                    'request_book_publisher' => $book_publisher,
                    'request_price' => $book_price,
                ));
        return redirect()->route('listrequest');
    }
}
