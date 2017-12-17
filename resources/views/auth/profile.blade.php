@extends('layouts.index')
@section('content')
	<div class="container fill">
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
				{{$profile[0]->user_saldo}}
			</div>
		</div>
		<form role="form" method="POST" action=''>
	       	{!! csrf_field() !!}
	       	<input type="hidden" name="current_saldo" value="{{$profile[0]->user_saldo}}">
	       	<input type="number" name="add_saldo" value="100" type="number" min="0" max="1000000" step="100" >
	       	<input class="btn btn-outline-success" type="submit" name="submit" value="Add saldo">
		</form>
	</div>
	<br></div>
@stop