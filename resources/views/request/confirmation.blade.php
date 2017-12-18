@extends('layouts.index')
@section('content')
<div class="container fill">
	<div class="row align-items-center">
		<div class="col-5">
			<div class="row">
				<div class="col" align="center"><h3><u>Anda akan Menjual Buku</u></h3></div>
			</div>
			<div class="col" align="center">
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
		<div class="col-5">
			<div class="row">
				<div class="col" align="center"><h3>Kepada</h3></div>
			</div>
			<div class="col" align="center">
				<div class="row">
					<div class="col-6"><b>Penerima</b></div>
					<div class="col-6">{{$penerima}}</div>
				</div>
				<div class="row">
					<div class="col-6"><b>Alamat</b></div>
					<div class="col-6"><h4>{{$alamat}}</h4></div>
				</div>
			</div>
		</div>
		<div class="col-2">
		<form role="form" method="POST" action='/request/detail'>
	       	{!! csrf_field() !!}
	       	<input type="hidden" name="book_id" value="{{$book_id}}">
	       	<div class="col">
	       		<input class="btn btn-outline-success btn-lg" type="submit" name="submit" value="Sell">
	       	</div>
		</form>
	</div>
	
</div>
@stop