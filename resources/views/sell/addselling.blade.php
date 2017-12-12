@extends('layouts.index')
@section('content')
	<form role="form" method="POST" action=''>
       	{{ csrf_field() }}
		<div class="form-group">
    		<label for="">Nama Buku</label>
			<input class="form-control" type="text" name="book_name">

    		<label for="">Penulis Buku</label>
			<input class="form-control" type="text" name="book_author">

    		<label for="">Tahun Buku</label>
			<input class="form-control" type="number" min="1900" max="2018" step="1" name="book_year">

    		<label for="">Penerbit Buku</label>
			<input class="form-control" type="text" name="book_publisher">

    		<label for="">Harga Buku</label>
			<input class="form-control" type="number" min="0" max="1000000" step="100" name="book_price">

    		<label for="">Keterangan Buku</label>
			<input class="form-control" type="text" name="book_details">

			<input class="btn btn-primary" type="submit" name="submit">
		</div>
	</form>
@stop