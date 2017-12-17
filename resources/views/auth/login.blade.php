@extends('layouts.index')
@section('content')
	<form class="comment-form" role="form" method="POST" action='login'>
       	{!! csrf_field() !!}
       	<div class="row">
       		<div class="col"></div>
	  		<div class="form-group col-6">
	    		<label for="">Username</label>
				<input class="form-control" type="text" name="username">
				
	    		<label for="">Password</label>
				<input class="form-control" type="password" name="password"><br>	
				<input class="btn btn-outline-success" type="submit" name="submit">
			</div>
			<div class="col"></div>
		</div>
	</form>
	<h5>No account? Create one!</h5>
	<a class="btn btn-success btn-lg" href="{{'register'}}">Register</a>
@stop