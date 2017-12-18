@extends('layouts.index')
@section('content')
	<div class="container"><br>
	<div class="row align-items-center">
		<div class="col">
			<h1>Selling Book List</h1>
		</div>
		<div class="col-3">
			<a class="btn btn-danger btn-lg my-2 my-sm-0" href="{{'/sell/add'}}">Add Sell</a>
		</div>
	</div>
 	<?php $i=0; ?>
 	<form>
		<label>Search Title</label>
 		<input type="text" name="title">
 		<input type="submit" name="search" value="Search" class="btn btn-secondary">
 	</form>
	@foreach($sellings as $selling)
	<br><h2> <?php $i++; ?> {{$i}} </h2>
	<div class="container fill">
		<div class="row">
			<div class="col-md-4">
				<label><b>Book owner</b></label>
			</div>
			<div class="col-md-6">
				{{$selling->user_name}}
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<label><b>Book Name</b></label>
			</div>
			<div class="col-md-6">
				{{$selling->selling_book_name}}
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<label><b>Book author</b></label>
			</div>
			<div class="col-md-6">
				{{$selling->selling_book_author}}
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<label><b>Book year</b></label>
			</div>
			<div class="col-md-6">
				{{$selling->selling_book_year}}
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<label><b>Book publisher</b></label>
			</div>
			<div class="col-md-6">
				{{$selling->selling_book_publisher}}
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<label><b>Book listing date</b></label>
			</div>
			<div class="col-md-6">
				{{$selling->selling_date}}
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<label><b>Book price</b></label>
			</div>
			<div class="col-md-6">
				Rp {{$selling->selling_price}}
			</div>
		</div>
		<form role="form" method="GET" action='sell/detail'>
	       	{!! csrf_field() !!}
	       	<input type="hidden" name="selling_id" value="{{$selling->selling_id}}">
	       	<input type="hidden" name="user_name" value="{{$selling->user_name}}">
	       	<input type="hidden" name="selling_book_name" value="{{$selling->selling_book_name}}">
	       	<input type="hidden" name="selling_book_author" value="{{$selling->selling_book_author}}">
	       	<input type="hidden" name="selling_book_year" value="{{$selling->selling_book_year}}">
	       	<input type="hidden" name="selling_book_publisher" value="{{$selling->selling_book_publisher}}">
	       	<input type="hidden" name="selling_date" value="{{$selling->selling_date}}">
	       	<input type="hidden" name="selling_price" value="{{$selling->selling_price}}">
	       	<input class="btn btn-outline-danger" type="submit" name="submit" value="Buy">
		</form>
	</div>
	@endforeach
	<br><div>
@stop