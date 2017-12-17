@extends('layouts.index')
@section('content')
	<div class="row">
		<div class="col">
			<h1>Official Store</h1>
		</div>
	</div>
	<?php $i=0; ?>
	@foreach($books as $book)
		<br> <?php $i++; ?> {{$i}}
		<div class="row">
			<div class="col-md-2">
				<label>Nama Buku</label>
			</div>
			<div class="col-md-2">
				{{$book->shop_sell_book_name}}
			</div>
		</div>
		<div class="row">
			<div class="col-md-2">
				<label>Penulis Buku</label>
			</div>
			<div class="col-md-2">
				{{$book->shop_sell_book_author}}
			</div>
		</div>
		<div class="row">
			<div class="col-md-2">
				<label>Tahun Buku</label>
			</div>
			<div class="col-md-2">
				{{$book->shop_sell_book_year}}
			</div>
		</div>
		<div class="row">
			<div class="col-md-2">
				<label>Penerbit Buku</label>
			</div>
			<div class="col-md-2">
				{{$book->shop_sell_book_publisher}}
			</div>
		</div>
		<div class="row">
			<div class="col-md-2">
				<label>Tanggal list buku</label>
			</div>
			<div class="col-md-2">
				{{$book->shop_sell_date}}
			</div>
		</div>
		<div class="row">
			<div class="col-md-2">
				<label>Harga Buku</label>
			</div>
			<div class="col-md-2">
				{{$book->shop_sell_price}}
			</div>
		</div>
		<form role="form" method="POST" action='listbuku'>
	       	{!! csrf_field() !!}
	       	<input type="hidden" name="book_id" value="{{$book->shop_sell_id}}">
	       	<input type="submit" name="Buy" value="Buy">
		</form>
	@endforeach
@stop