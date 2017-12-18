@extends('layouts.index')
@section('content')
	<h1>List Buku</h1>
	<?php $i=0; ?>
	@foreach($books as $book)
	<br> <h2> <?php $i++; ?> {{$i}} </h2>
	<div class="container fill">
		<div class="row align-items-start">
			<div class="col-4">
				<label><b>Nama Buku</b></label>
			</div>
			<div class="col-6">
				{{$book->shop_sell_book_name}}
			</div>
		</div>
		<div class="row align-items-start">
			<div class="col-4">
				<label><b>Penulis Buku</b></label>
			</div>
			<div class="col-6">
				{{$book->shop_sell_book_author}}
			</div>
		</div>
		<div class="row align-items-start">
			<div class="col-4">
				<label><b>Tahun Buku</b></label>
			</div>
			<div class="col-6">
				{{$book->shop_sell_book_year}}
			</div>
		</div>
		<div class="row align-items-start">
			<div class="col-4">
				<label><b>Penerbit Buku</b></label>
			</div>
			<div class="col-6">
				{{$book->shop_sell_book_publisher}}
			</div>
		</div>
		<div class="row align-items-start">
			<div class="col-4">
				<label><b>Tanggal list buku</b></label>
			</div>
			<div class="col-6">
				{{$book->shop_sell_date}}
			</div>
		</div>
		<div class="row align-items-start">
			<div class="col-4">
				<label><b>Harga Buku</b></label>
			</div>
			<div class="col-6">
				Rp {{$book->shop_sell_price}}
			</div>
		</div>
		<div class="row align-items-start">
			<div class="col-4">
				<label><b>Status</b></label>
			</div>
			<div class="col-6">
				@if($book->shop_sell_sold==1)
					Sold
				@else
					Available
				@endif
			</div>
		</div></div>
	@endforeach
@stop