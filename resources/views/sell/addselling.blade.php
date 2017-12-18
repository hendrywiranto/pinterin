@extends('layouts.index')
@section('content')
	<form role="form" method="POST" action=''>
       	{{ csrf_field() }}
		<div class="form-group">
			<div class="row align-items-center">
	  			<div class="col">
	  				<h2>Add Sell</h2>
	  			</div>
		    	<div class="col-10">
		    		<label for="">Nama Buku</label>
					<input class="form-control" type="text" name="book_name" required>

		    		<label for="">Penulis Buku</label>
					<input class="form-control" type="text" name="book_author" required>

		    		<label for="">Tahun Buku</label>
					<input class="form-control" type="number" value="1900" min="1900" max="2018" step="1" name="book_year" required>

		    		<label for="">Penerbit Buku</label>
					<input class="form-control" type="text" name="book_publisher" required>

					<label for="">Harga Buku</label>
					<div class="input-group">
			    		<div class="input-group-addon">Rp</div>
							<input class="form-control" type="number" min="0" max="1000000" step="100" name="book_price" required>
					</div> 	

		    		<label for="">Keterangan Buku</label>
					<input class="form-control" type="text" name="book_details" required>
					
					<br>
					<input class="btn btn-outline-danger btn-lg" type="submit" name="submit" value="Add Sell">
					<a class="btn btn-danger" href="/sell">Back</a>
				</div>
			</div>
		</div>
	</form>
@stop