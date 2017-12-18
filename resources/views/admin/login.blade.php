@extends('layouts.index')
@section('content')
	<form role="form" method="POST" action='login'>
       	{!! csrf_field() !!}
       	<div class="row">
       		<div class="col"></div>
		  		<div class="form-group col-6">
		    		<label for="">Username <b>Admin ONLY!</b></label>
					<input class="form-control" type="text" name="username" required>
					
		    		<label for="">Password </label>
					<input class="form-control" type="password" name="password" required><br>
					<input class="btn btn-primary" type="submit" name="submit">
					<a class="btn btn-success btn-lg" href="/">Back to User Page</a>
				</div>
			<div class="col"></div>
		</div>
	</form>
@stop