@extends('layouts.index')
@section('content')
	<form class="comment-form" role="form" method="POST" action='login'>
       	{!! csrf_field() !!}
       	<div class="row align-items-center">
       		<div class="col-4">
       			<h1>pinter.in</h1>
       			<h6>ya nda apa-apa... keren aja kan ya? </h6>
       		</div>
	  		<div class="form-group col-6">
	    		<label for=""><b>Username</b></label>
				<input class="form-control" type="text" name="username">
				
	    		<label for=""><b>Password</b></label>
				<input class="form-control" type="password" name="password">
			</div>
			<div class="col-2">
				<input class="btn btn-outline-info btn-lg" type="submit" name="submit" value="Login">
			</div>
			<div class="col"></div>
		</div>
	</form>
	<h5>No account? Create one!</h5>
	<a class="btn btn-success btn-lg" href="{{'register'}}">Register</a>
@stop