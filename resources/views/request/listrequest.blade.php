@extends('layouts.index')
@section('content')
	<div class="container"><br>
	<div class="row">
		<div class="col">
			<h1>Request Book</h1>
		</div>
		<div class="col-3">
			<a class="btn btn-success my-2 my-sm-0" href="{{'/request/add'}}">Add Request</a>
		</div>
	</div>
	<?php $i=0; ?>
	@foreach($requests as $request)
	<br> <h2><?php $i++; ?> {{$i}} </h2>
	<div class="container fill">
		<div class="row">
			<div class="col-md-2">
				<label><b>Peminat Buku</b></label>
			</div>
			<div class="col-md-4">
				{{$request->user_full_name}}
			</div>
			<div class="col-md-2">
				<label><b>Penerima</b></label>
			</div>
			<div class="col-md-4">
				{{$request->request_penerima}}
			</div>
		</div>
		<div class="row">
			<div class="col-md-2">
				<label><b>Nama Buku</b></label>
			</div>
			<div class="col-md-4">
				{{$request->request_book_name}}
			</div>
			<div class="col-md-2">
				<label><b>Alamat Penerima</b></label>
			</div>
			<div class="col-md-4">
				{{$request->request_alamat}}
			</div>
		</div>
		<div class="row">
			<div class="col-md-2">
				<label><b>Penulis Buku</b></label>
			</div>
			<div class="col-md-4">
				{{$request->request_book_author}}
			</div>
			<div class="col-md-2">
				<label><b>Telepom Penerima</b></label>
			</div>
			<div class="col-md-4">
				{{$request->request_phone}}
			</div>
		</div>
		<div class="row">
			<div class="col-md-2">
				<label><b>Tahun Buku</b></label>
			</div>
			<div class="col-md-4">
				{{$request->request_book_year}}
			</div>
		</div>
		<div class="row">
			<div class="col-md-2">
				<label><b>Penerbit Buku</b></label>
			</div>
			<div class="col-md-4">
				{{$request->request_book_publisher}}
			</div>
		</div>
		<div class="row">
			<div class="col-md-2">
				<label><b>Harga Buku</b></label>
			</div>
			<div class="col-md-4">
				Rp {{$request->request_price}}
			</div>
		</div>
		<form role="form" method="GET" action='request/detail'>
	       	{!! csrf_field() !!}
	       	<input type="hidden" name="book_id" value="{{$request->request_id}}">
	       	<input type="hidden" name="alamat" value="{{$request->request_alamat}}">
	       	<input type="hidden" name="book_name" value="{{$request->request_book_name}}">
	       	<input type="hidden" name="penerima" value="{{$request->request_penerima}}">
	       	<input type="hidden" name="book_price" value="{{$request->request_price}}">
	       	<input class="btn btn-outline-success" type="submit" name="submit" value="Sell">
		</form>
	</div>
	@endforeach
	<br></div>
@stop