@extends('layouts.index')
@section('content')
	<div class="container fill">
		<form class="comment-form" role="form" method="POST" action='register'>
	       	{!! csrf_field() !!}
	  		<div class="form-group">
	  			<div class="row align-items-center">
	  				<div class="col">
	  					<h2>Register Now</h2>
	  				</div>
		    		<div class="col-10">
				    	<label for="">Username</label>
						<input class="form-control" type="text" name="username">
		
			    		<label for="">Password</label>
						<input class="form-control" type="password" name="password">
				    	
				    	<label for="">Fullname</label>
						<input class="form-control" type="text" name="fullname">

			    		<label for="">Address</label>
						<input class="form-control" type="text" name="address">

			    		<label for="">Phone</label>
						<input class="form-control" type="text" name="phone"><br>
						<input type="submit" name="submit" class="btn btn-outline-primary">
						<a href="/" class="btn btn-outline-info">Back</a>
					</div>
				</div>
			</div>
		</form>
	</div>
@stop