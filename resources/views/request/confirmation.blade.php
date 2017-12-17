@extends('layouts.index')
@section('content')
	<div class="row">
		Anda akan menjual buku
	</div>
	<div class="row">
		<div class="col-md-3">Judul</div>
		<div class="col-md-3">{{$book_name}}</div>
	</div>
	<div class="row">
		<div class="col-md-3">Harga</div>
		<div class="col-md-3">{{$book_price}}</div>
	</div>
	<div class="row">
		kepada
	</div>
	<div class="row">
		<div class="col-md-3">Penerima</div>
		<div class="col-md-3">{{$penerima}}</div>
	</div>
	<div class="row">
		<div class="col-md-3">Alamat</div>
		<div class="col-md-3">{{$alamat}}</div>
	</div>
		<form role="form" method="POST" action='/request/detail'>
	       	{!! csrf_field() !!}
	       	<input type="hidden" name="book_id" value="{{$book_id}}">
	       	<input class="btn btn-outline-success" type="submit" name="submit" value="Sell">
		</form>
@stop