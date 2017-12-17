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
			<div class="col-md-4">
				<label><b>Nama Buku</b></label>
			</div>
			<div class="col-md-6">
				{{$request->request_book_name}}
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<label><b>Penulis Buku</b></label>
			</div>
			<div class="col-md-6">
				{{$request->request_book_author}}
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<label><b>Tahun Buku</b></label>
			</div>
			<div class="col-md-6">
				{{$request->request_book_year}}
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<label><b>Penerbit Buku</b></label>
			</div>
			<div class="col-md-6">
				{{$request->request_book_publisher}}
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<label><b>Tanggal list buku</b></label>
			</div>
			<div class="col-md-6">
				{{$request->request_date}}
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<label><b>Harga Buku</b></label>
			</div>
			<div class="col-md-6">
				Rp {{$request->request_price}}
			</div>
		</div>
		<form role="form" method="POST" action='request'>
	       	{!! csrf_field() !!}
	       	<input type="hidden" name="book_id" value="{{$request->request_id}}">
	       	<input class="btn btn-outline-success" type="submit" name="submit" value="Request">
		</form>
	</div>
	@endforeach
	<br></div>
@stop