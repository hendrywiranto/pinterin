@extends('layouts.index')
@section('content')
<div class="container"><br>
	<div class="row align-items-center">
		<div class="col">
			<h1>Official Store</h1>
		</div>
	</div>
	<?php $i=0; ?>
 	<form>
		<label>Search Title</label>
 		<input type="text" name="title">
 		<input type="submit" name="search" value="Search" class="btn btn-secondary">
 	</form>
	@foreach($books as $book)
	<br> <h2> <?php $i++; ?> {{$i}} </h2>
	<div class="container fill">
		<div class="row align-items-start">
			<div class="col-4">
				<label><b>Book Name</b></label>
			</div>
			<div class="col-6">
				{{$book->shop_sell_book_name}}
			</div>
		</div>
		<div class="row align-items-start">
			<div class="col-4">
				<label><b>Book author</b></label>
			</div>
			<div class="col-6">
				{{$book->shop_sell_book_author}}
			</div>
		</div>
		<div class="row align-items-start">
			<div class="col-4">
				<label><b>Book year</b></label>
			</div>
			<div class="col-6">
				{{$book->shop_sell_book_year}}
			</div>
		</div>
		<div class="row align-items-start">
			<div class="col-4">
				<label><b>Book publisher</b></label>
			</div>
			<div class="col-6">
				{{$book->shop_sell_book_publisher}}
			</div>
		</div>
		<div class="row align-items-start">
			<div class="col-4">
				<label><b>Book listing date</b></label>
			</div>
			<div class="col-6">
				{{$book->shop_sell_date}}
			</div>
		</div>
		<div class="row align-items-start">
			<div class="col-4">
				<label><b>Book price</b></label>
			</div>
			<div class="col-6">
				<h4> Rp {{$book->shop_sell_price}}</h4>
			</div>
		</div>
		<form role="form" method="POST" action='listbuku'>
	       	{!! csrf_field() !!}
	       	<input type="hidden" name="book_id" value="{{$book->shop_sell_id}}">
	       	<input class="btn btn-outline-success" type="submit" name="Buy" value="Buy">
		</form>
	@endforeach
	<br></div>
@stop