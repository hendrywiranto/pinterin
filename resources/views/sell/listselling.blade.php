@extends('layouts.index')
@section('content')
	<div class="container"><br>
	<div class="row align-items-center">
		<div class="col">
			<h1>Sell Book</h1>
		</div>
		<div class="col-3">
			<a class="btn btn-danger btn-lg my-2 my-sm-0" href="{{'/sell/add'}}">Add Sell</a>
		</div>
	</div>
 	<?php $i=0; ?>
	@foreach($sellings as $selling)
	<br><h2> <?php $i++; ?> {{$i}} </h2>
	<div class="container fill">
		<div class="row">
			<div class="col-md-4">
				<label>Penjual Buku</label>
			</div>
			<div class="col-md-6">
				{{$selling->user_name}}
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<label>Nama Buku</label>
			</div>
			<div class="col-md-6">
				{{$selling->selling_book_name}}
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<label>Penulis Buku</label>
			</div>
			<div class="col-md-6">
				{{$selling->selling_book_author}}
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<label>Tahun Buku</label>
			</div>
			<div class="col-md-6">
				{{$selling->selling_book_year}}
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<label>Penerbit Buku</label>
			</div>
			<div class="col-md-6">
				{{$selling->selling_book_publisher}}
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<label>Tanggal list buku</label>
			</div>
			<div class="col-md-6">
				{{$selling->selling_date}}
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<label>Harga Buku</label>
			</div>
			<div class="col-md-6">
				Rp {{$selling->selling_price}}
			</div>
		</div>
		<form role="form" method="GET" action='sell/detail'>
	       	{!! csrf_field() !!}
	       	<input type="hidden" name="selling_id" value="{{$selling->selling_id}}">
	       	<input type="hidden" name="selling_price" value="{{$selling->selling_price}}">
	       	<input class="btn btn-outline-danger" type="submit" name="submit" value="Buy">
		</form>
	</div>
	@endforeach
	<br><div>
@stop