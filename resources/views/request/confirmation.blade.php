@extends('layouts.index')
@section('content')
<div class="container fill">
	<div class="row"><div class="col"></div><h1>Konfirmasi Pemesanan</h1></div></div>
	<br><div class="row align-items-start">
		<div class="col-md-5" align="center">
			<div class="col"><h3><u>Anda akan Menjual Buku</u></h3></div>
			<div class="col">
				<div class="row">
					<div class="col-6"><b>Judul</b></div>
					<div class="col-6">{{$book_name}}</div>
				</div>
				<div class="row">
					<div class="col-6"><b>Harga</b></div>
					<div class="col-6"><h4>Rp {{$book_price}}</h4></div>
				</div>
			</div>
		</div>
		<div class="col-md-3" align="center">
			<div class="row">
				<div class="col"><h3>Kepada</h3></div>
			</div>
			<div class="col">
				<div class="row">
					<div class="col-6"><b>Penerima</b></div>
					<div class="col-6">{{$penerima}}</div>
				</div>
				<div class="row">
					<div class="col-6"><b>Alamat</b></div>
					<div class="col-6">{{$alamat}}</div>
				</div>
			</div>
		</div>
		<div class="col-md-4" align="center">
		<form role="form" method="POST" action='/request/detail'>
	       	{!! csrf_field() !!}
	       	<input type="hidden" name="book_id" value="{{$book_id}}">
	       	<div class="col">
	       		<input class="btn btn-outline-success btn-lg" type="submit" name="submit" value="Accept & Sell">
	       	</div>
		</form>
	</div>
	
</div>
@stop