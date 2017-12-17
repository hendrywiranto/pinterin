@extends('layouts.index')
@section('content')
	<form role="form" method="POST" action=''>
       	{{ csrf_field() }}
		<div class="form-group">
			<div class="row align-items-center">
	  			<div class="col">
	  				<h2>Add Request</h2>
	  			</div>
		    	<div class="col-10">
		    		<label for="">Nama Buku</label>
					<input class="form-control" type="text" name="book_name">

		    		<label for="">Penulis Buku</label>
					<input class="form-control" type="text" name="book_author">

		    		<label for="">Tahun Buku</label>
					<input class="form-control" type="number" value="1900" min="1900" max="2018" step="1" name="book_year">

		    		<label for="">Penerbit Buku</label>
					<input class="form-control" type="text" name="book_publisher">

					<label for="">Harga Buku</label>
					<div class="input-group">
			    		<div class="input-group-addon">Rp</div>
							<input class="form-control" type="number" min="0" max="1000000" step="100" name="book_price">
					</div>

		    		<label for="">Penerima Buku</label>
					<input class="form-control" type="text" name="request_penerima">

		    		<label for="">Alamat Penerima Buku</label>
					<input class="form-control" type="text" name="request_alamat">

		    		<label for="">Telepon Penerima Buku</label>
					<input class="form-control" type="text" name="request_phone">

					<br>
					<input class="btn btn-success" type="submit" name="submit" value="Set Request">
					<a class="btn btn-outline-success" href="/request">Back</a>
				</div>
			</div>
		</div>
	</form>
@stop