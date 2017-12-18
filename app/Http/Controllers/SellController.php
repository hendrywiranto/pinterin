<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SellController extends Controller
{
    function index()
    {
        $sellings = DB::table('selling')
            ->join('user', 'user.user_id', '=', 'selling.user_id')
            ->where('selling_sold', 0)
            ->get();
        return view('sell.listselling',compact('sellings'));
    }

    function display_buy_form(Request $request)
    {
        $selling_id =                   $request->input('selling_id');
        $user_name =                    $request->input('user_name');
        $selling_book_name =            $request->input('selling_book_name');
        $selling_book_author =          $request->input('selling_book_author');
        $selling_book_year =            $request->input('selling_book_year');
        $selling_book_publisher =       $request->input('selling_book_publisher');
        $selling_date =                 $request->input('selling_date');
        $selling_price =                $request->input('selling_price');
        $saldo = DB::table('user')
                ->where('user_id', session('user_id'))
                ->select('user_saldo')
                ->get();
        return view('sell.detail', compact('selling_id','selling_book_name','selling_book_author','selling_book_year','selling_book_publisher','selling_date','user_name','selling_price','saldo'));
    }

    function buy_buku(Request $request)
    {
        $trans_pembeli_id = session('user_id');
        $trans_sell_id =    $request->input('selling_id');
        $trans_penerima =   $request->input('trans_penerima');
        $trans_alamat =     $request->input('trans_alamat');
        $trans_phone =      $request->input('trans_phone');
        $trans_date =       date("Y-m-d");

        $current_saldo =    DB::table('user')
                                ->where('user_id', session('user_id'))
                                ->get();
        $price =            (int)$request->selling_price;
        $saldo =            $current_saldo[0]->user_saldo - $price;

        if ($saldo<0){
            $notice = "Your balance is not enough";
            $route = "/sell";
            return view('layouts.notice',compact('route','notice'));
        }
        else {
            DB::table('user')
                ->where('user_id', session('user_id'))
                ->update(['user_saldo' => $saldo]);

            DB::table('sell_transaction')
                ->insert(
                    array(
                        'trans_pembeli_id' => $trans_pembeli_id,
                        'trans_sell_id' => $trans_sell_id,
                        'trans_penerima' => $trans_penerima,
                        'trans_alamat' => $trans_alamat,
                        'trans_date' => $trans_date,
                        'trans_phone' => $trans_phone,
                    ));

            DB::table('selling')
                ->where('selling_id', $request->selling_id)
                ->update(['selling_sold' => 1]);

            $notice = "Transaction success";
            $route = "/sell";
            return view('layouts.notice',compact('route','notice'));
        }
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
