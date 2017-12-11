@extends('layouts.index')
@section('content')
	<form class="comment-form" role="form" method="POST" action='login'>
       	{!! csrf_field() !!}
  		<div class="form-group">
    		<label for="">username</label>
			<input class="form-control" type="text" name="username">
			
    		<label for="">password</label>
			<input class="form-control" type="password" name="password">
			<input type="submit" name="submit">
		</div>
	</form>
	<a href="{{'register'}}">Register</a>
@stop