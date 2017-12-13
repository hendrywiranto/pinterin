@extends('layouts.index')
@section('content')
	<form class="comment-form" role="form" method="POST" action='login'>
       	{!! csrf_field() !!}
       	<div class="row">
       		<div class="col"></div>
	  		<div class="form-group col-6">
	    		<label for="">username</label>
				<input class="form-control" type="text" name="username">
				
	    		<label for="">password</label>
				<input class="form-control" type="password" name="password"><br>	
				<input class="btn btn-success" type="submit" name="submit">
			</div>
			<div class="col"></div>
		</div>
	</form>
	<a class="btn btn-success" href="{{'register'}}">Register</a>
@stop