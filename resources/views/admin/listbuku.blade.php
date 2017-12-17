@extends('layouts.index')
@section('content')
	<?php $i=0; ?>
	@foreach($books as $book)
	<br> <h2> <?php $i++; ?> {{$i}} </h2>
	<div class="container fill">
		<div class="row">
			<div class="col-md-4">
				<label><b>Nama Buku</b></label>
			</div>
			<div class="col-md-6">
				{{$book->shop_sell_book_name}}
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<label><b>Penulis Buku</b></label>
			</div>
			<div class="col-md-6">
				{{$book->shop_sell_book_author}}
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<label><b>Tahun Buku</b></label>
			</div>
			<div class="col-md-6">
				{{$book->shop_sell_book_year}}
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<label><b>Penerbit Buku</b></label>
			</div>
			<div class="col-md-6">
				{{$book->shop_sell_book_publisher}}
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<label><b>Tanggal list buku</b></label>
			</div>
			<div class="col-md-6">
				{{$book->shop_sell_date}}
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<label><b>Harga Buku</b></label>
			</div>
			<div class="col-md-6">
				Rp {{$book->shop_sell_price}}
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<label><b>Status</b></label>
			</div>
			<div class="col-md-6">
				@if($book->shop_sell_sold==1)
					Sold
				@else
					Available
				@endif
			</div>
		</div><br></div>
	@endforeach
@stop