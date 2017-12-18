@extends('layouts.index')
@section('content')
	<div class="row align-items-center" align="center">
		<div class="col">
			<h2> {{$notice}} </h2>
		</div>
		<div class="col">
			<a class="btn btn-success btn-lg" href="/sell">Back</a>
		</div>
	</div>
@stop