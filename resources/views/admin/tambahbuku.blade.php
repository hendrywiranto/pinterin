@extends('layouts.index')
@section('content')
	<div><h2>Tambah Buku</h2></div>
	<form role="form" method="POST" action=''>
       	{{ csrf_field() }}
		<div class="form-group">
		<div class="row">
			<div class="col-6">
	    		<label for="">Nama Buku</label>
				<input class="form-control" type="text" name="book_name">
			</div>
			<div class="col-6">
	    		<label for="">Penulis Buku</label>
				<input class="form-control" type="text" name="book_author">
			</div>
		</div>
		<div class="row">
			<div class="col-6">
	    		<label for="">Tahun Buku</label>
				<input class="form-control" type="number" min="1900" max="2018" step="1" name="book_year">
			</div>
			<div class="col-6">
	    		<label for="">Penerbit Buku</label>
				<input class="form-control" type="text" name="book_publisher">
			</div>
		</div>
		<div class="row">
			<div class="col">
	    		<label for="">Harga Buku</label>
				<input class="form-control" type="number" min="0" max="1000000" step="100" name="book_price">
			</div>
		</div><br>
			<input class="btn btn-primary" type="submit" name="submit">
		</div>
	</form>
@stop