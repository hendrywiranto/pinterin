@extends('layouts.index')
@section('content')
	<div><h1>Add Book</h1></div>
	<form role="form" method="POST" action=''>
       	{{ csrf_field() }}
		<div class="form-group">
		<div class="row">
			<div class="col-6">
	    		<label for="">Book name</label>
				<input class="form-control" type="text" name="book_name">
			</div>
			<div class="col-6">
	    		<label for="">Book author</label>
				<input class="form-control" type="text" name="book_author">
			</div>
		</div>
		<div class="row">
			<div class="col-6">
	    		<label for="">Book year</label>
				<input class="form-control" type="number" min="1900" max="2018" step="1" name="book_year">
			</div>
			<div class="col-6">
	    		<label for="">Book publisher</label>
				<input class="form-control" type="text" name="book_publisher">
			</div>
		</div>
		<div class="row">
			<div class="col-6">
	    		<label for="">Book price</label>
	    		<div class="input-group">
		    		<div class="input-group-addon">Rp</div>
					<input class="form-control currency" type="number" min="0" max="1000000" step="100" name="book_price">
				</div></div>
		</div><br>
			<input class="btn btn-primary" type="submit" name="submit" value="Add Book">
		</div>
	</form>
@stop