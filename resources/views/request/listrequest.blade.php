@extends('layouts.index')
@section('content')
	<div class="container"><br>
	<div class="row align-items-center">
		<div class="col">
			<h1>Requesting Book List</h1>
		</div>
		<div class="col-3">
			<a class="btn btn-success btn-lg my-2 my-sm-0" href="{{'/request/add'}}">Add Request</a>
		</div>
	</div>
	<?php $i=0; ?>
 	<form>
		<label>Search Title</label>
 		<input type="text" name="title">
 		<input type="submit" name="search" value="Search" class="btn btn-secondary">
 	</form>
	@foreach($requests as $request)
	<br> <h2><?php $i++; ?> {{$i}} </h2>
	<div class="container fill">
		<div class="row">
			<div class="col-md-2">
				<label><b>Request owner</b></label>
			</div>
			<div class="col-md-4">
				{{$request->user_full_name}}
			</div>
			<div class="col-md-2">
				<label><b>Recipient name</b></label>
			</div>
			<div class="col-md-4">
				{{$request->request_penerima}}
			</div>
		</div>
		<div class="row">
			<div class="col-md-2">
				<label><b>Book name</b></label>
			</div>
			<div class="col-md-4">
				{{$request->request_book_name}}
			</div>
			<div class="col-md-2">
				<label><b>Recipient address</b></label>
			</div>
			<div class="col-md-4">
				{{$request->request_alamat}}
			</div>
		</div>
		<div class="row">
			<div class="col-md-2">
				<label><b>Book author</b></label>
			</div>
			<div class="col-md-4">
				{{$request->request_book_author}}
			</div>
			<div class="col-md-2">
				<label><b>Recipient Phone</b></label>
			</div>
			<div class="col-md-4">
				{{$request->request_phone}}
			</div>
		</div>
		<div class="row">
			<div class="col-md-2">
				<label><b>Book year</b></label>
			</div>
			<div class="col-md-4">
				{{$request->request_book_year}}
			</div>
		</div>
		<div class="row">
			<div class="col-md-2">
				<label><b>Book publisher</b></label>
			</div>
			<div class="col-md-4">
				{{$request->request_book_publisher}}
			</div>
		</div>
		<div class="row">
			<div class="col-md-2">
				<label><b>Book price</b></label>
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