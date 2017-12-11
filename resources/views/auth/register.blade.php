@extends('layouts.index')
@section('content')
	<form class="comment-form" role="form" method="POST" action='register'>
       	{!! csrf_field() !!}
  		<div class="form-group">
    		<label for="">username</label>
			<input class="form-control" type="text" name="username">

    		<label for="">password</label>
			<input class="form-control" type="password" name="password">

    		<label for="">fullname</label>
			<input class="form-control" type="text" name="fullname">

    		<label for="">address</label>
			<input class="form-control" type="text" name="address">

    		<label for="">phone</label>
			<input class="form-control" type="text" name="phone">
			<input type="submit" name="submit" class="btn btn-primary">
		</div>
	</form>
@stop