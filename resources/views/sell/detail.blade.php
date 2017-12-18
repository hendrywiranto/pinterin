@extends('layouts.index')
@section('content')
	<form role="form" method="POST" action=''>
       	{{ csrf_field() }}
		<div class="form-group">
			<div class="row align-items-center">
	  			<div class="col-4" align="center">
	  				<h2>Add Sell</h2>
	  			</div>
		    	<div class="col-8">
		    		<label for="">Nama Penerima</label>
					<input class="form-control" type="text" name="trans_penerima">

		    		<label for="">Alamat Penerima</label>
					<input class="form-control" type="text" name="trans_alamat">

		    		<label for="">Nomor Telepon Penerima</label>
					<input class="form-control" type="text" name="trans_phone">

	       			<input type="hidden" name="selling_id" value="{{$selling_id}}">
	       			<input type="hidden" name="selling_price" value="{{$selling_price}}"><br>
					<input class="btn btn-outline-danger btn-lg" type="submit" name="submit" value="Buy">
					<a class="btn btn-danger" href="/sell">Back</a>
				</div>
			</div>
		</div>
	</form>
@stop