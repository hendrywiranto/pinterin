@extends('layouts.index')
@section('content')
	<div class="row">
		<a href="{{'/request/add'}}">Add request</a>
	</div>
	<?php $i=0; ?>
	@foreach($requests as $request)
		<br> <?php $i++; ?> {{$i}}
		<div class="row">
			<div class="col-md-2">
				<label>Nama Buku</label>
			</div>
			<div class="col-md-2">
				{{$request->request_book_name}}
			</div>
		</div>
		<div class="row">
			<div class="col-md-2">
				<label>Penulis Buku</label>
			</div>
			<div class="col-md-2">
				{{$request->request_book_author}}
			</div>
		</div>
		<div class="row">
			<div class="col-md-2">
				<label>Tahun Buku</label>
			</div>
			<div class="col-md-2">
				{{$request->request_book_year}}
			</div>
		</div>
		<div class="row">
			<div class="col-md-2">
				<label>Penerbit Buku</label>
			</div>
			<div class="col-md-2">
				{{$request->request_book_publisher}}
			</div>
		</div>
		<div class="row">
			<div class="col-md-2">
				<label>Tanggal list buku</label>
			</div>
			<div class="col-md-2">
				{{$request->request_date}}
			</div>
		</div>
		<div class="row">
			<div class="col-md-2">
				<label>Harga Buku</label>
			</div>
			<div class="col-md-2">
				{{$request->request_price}}
			</div>
		</div>
		<form role="form" method="POST" action='request'>
	       	{!! csrf_field() !!}
	       	<input type="hidden" name="book_id" value="{{$request->request_id}}">
	       	<input type="submit" name="Buy">
		</form>
	@endforeach
@stop