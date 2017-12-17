<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RequestController extends Controller
{
    function index()
    {
        //$requests = DB::table('request')->where('request_sold', 0)->get();
        $requests = DB::table('request')
            ->join('user', 'user.user_id', '=', 'request.user_id')
            ->where('request_sold', 0)
            ->get();
        return view('request.listrequest',compact('requests'));
    }

    function confirmation(Request $request){
        $book_id =          $request->input('book_id');
        $alamat =           $request->input('alamat');
        $book_name =        $request->input('book_name');
        $penerima =         $request->input('penerima');
        $book_price =       $request->input('book_price');
        return view('request.confirmation',compact('book_id','alamat','book_name','penerima','book_price'));
    }

    function sell_buku(Request $request)
    {
        DB::table('request')
            ->where('request_id', $request->book_id)
            ->update(['request_sold' => 1]);
        return redirect()->route('listrequest');
    }

    function add_request()
    {
    	return view('request.addrequest');
    }

    function save_add_request(Request $request)
    {
        $user_id =          session('user_id');
        $book_date =        date("Y-m-d");
        $book_sold =        0;
        $book_name =        $request->input('book_name');
        $book_author =      $request->input('book_author');
        $book_year =        $request->input('book_year');
        $book_publisher =   $request->input('book_publisher');
        $book_price =       $request->input('book_price');
        $request_penerima =     $request->input('request_penerima');
        $request_alamat =       $request->input('request_alamat');
        $request_phone =        $request->input('request_phone');
        DB::table('request')
            ->insert(
                array(
                    'user_id' => $user_id,
                    'request_date' => $book_date,
                    'request_sold' => $book_sold,
                    'request_book_name' => $book_name,
                    'request_book_author' => $book_author,
                    'request_book_year' => $book_year,
                    'request_book_publisher' => $book_publisher,
                    'request_price' => $book_price,
                    'request_penerima' => $request_penerima,
                    'request_alamat' => $request_alamat,
                    'request_phone' => $request_phone,
                ));
        return redirect()->route('listrequest');
    }
}
