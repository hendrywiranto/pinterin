@extends('layouts.index')
@section('content')
	<div class="container fill">
		<div class="row">
			<div class="col"> 
				<h1>{{$profile[0]->user_full_name}}</h1>
			</div>
		</div><br>
		<div class="row">
			<div class="col-md-4">
				<label><b>Full Name</b></label>
			</div>
			<div class="col-md-6">
				{{$profile[0]->user_full_name}}
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<label><b>Alamat</b></label>
			</div>
			<div class="col-md-6">
				{{$profile[0]->user_alamat}}
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<label><b>Phone</b></label>
			</div>
			<div class="col-md-6">
				{{$profile[0]->user_phone}}
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<label><b>Saldo</b></label>
			</div>
			<div class="col-md-6">
				<h4><i> Rp {{$profile[0]->user_saldo}} </i></h4>
			</div>
		</div>
		<form role="form" method="POST" action=''>
	       	{!! csrf_field() !!}
		    <div class="row">
		    	<div class="col">
			    	<h2>Isi Saldo</h2>
				</div>
		    	<div class="col-md-4">
			    	<div class="input-group"> 	
				       	<input type="hidden" name="current_saldo" value="{{$profile[0]->user_saldo}}">
				       	<div class="input-group-addon">Rp</div>
				    	<input class="form-control" type="number" name="add_saldo" value="1000" type="number" min="1000" max="1000000" step="100" >
				    </div>
			    </div>
			    <div class="col-md-6">
			       	<input class="btn btn-outline-danger" type="submit" name="submit" value="Add Saldo">
			    </div>
			</div>
		</form>
	</div>
	<br></div>
@stop