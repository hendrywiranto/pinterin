@extends('layouts.index')
@section('content')
	<form role="form" method="POST" action='login'>
       	{!! csrf_field() !!}
       	<div class="row">
       		<div class="col"></div>
		  		<div class="form-group col-6">
		    		<label for="">Username <b>Admin</b></label>
					<input class="form-control" type="text" name="username">
					
		    		<label for="">Password <b>Admin</b></label>
					<input class="form-control" type="password" name="password"><br>
					<input class="btn btn-primary" type="submit" name="submit">
				</div>
			<div class="col"></div>
		</div>
	</form>
@stop