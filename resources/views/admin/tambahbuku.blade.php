@extends('layouts.index')
@section('content')
	<div>Ini Admin</div>
	<form role="form" method="POST" action=''>
       	{{ csrf_field() }}
		<div class="form-group">
    		<label for="">Nama Buku</label>
			<input class="form-control" type="text" name="book_name">

    		<label for="">Penulis Buku</label>
			<input class="form-control" type="text" name="book_author">

    		<label for="">Tahun Buku</label>
			<input class="form-control" type="text" name="book_year">

    		<label for="">Penerbit Buku</label>
			<input class="form-control" type="text" name="book_publisher">

    		<label for="">Harga Buku</label>
			<input class="form-control" type="text" name="book_price">

			<input class="btn btn-primary" type="submit" name="submit">
		</div>
	</form>
@stop