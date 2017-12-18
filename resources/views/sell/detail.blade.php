@extends('layouts.index')
@section('content')
		<div class="row align-items-center">
	  			<div class="col-4" align="center">
	  				<h2>Book Information</h2>
	  			</div>
		    	<div class="col-8">
		    		<div class="row">
						<div class="col-md-4">
									<label><b>Book owner</b></label>
								</div>
								<div class="col-md-4">
									{{$user_name}}
								</div>
							</div>
							<div class="row">
								<div class="col-md-4">
									<label><b>Book Name</b></label>
								</div>
								<div class="col-md-4">
									{{$selling_book_name}}
								</div>
							</div>
							<div class="row">
								<div class="col-md-4">
									<label><b>Book author</b></label>
								</div>
								<div class="col-md-4">
									{{$selling_book_author}}
								</div>
							</div>
							<div class="row">
								<div class="col-md-4">
									<label><b>Book year</b></label>
								</div>
								<div class="col-md-4">
									{{$selling_book_year}}
								</div>
							</div>
							<div class="row">
								<div class="col-md-4">
									<label><b>Book publisher</b></label>
								</div>
								<div class="col-md-4">
									{{$selling_book_publisher}}
								</div>
							</div>
							<div class="row">
								<div class="col-md-4">
									<label><b>Book listing date</b></label>
								</div>
								<div class="col-md-4">
									{{$selling_date}}
								</div>
							</div>
							<div class="row">
								<div class="col-md-4">
									<label><b>Book price</b></label>
								</div>
								<div class="col-md-4">
									Rp {{$selling_price}}
								</div>
							</div>
							<div class="row">
								<div class="col-md-4">
									<label><b>Current balance</b></label>
								</div>
								<div class="col-md-3">
									Rp {{$saldo[0]->user_saldo}}  
								</div>
								<div class="col-md-2">
									<a href="{{'/profile'}}" class="btn btn-secondary" target="_BLANK">Balance Top Up</a>
								</div>
							</div>
						</div>
			</div>
			<br>
	<form role="form" method="POST" action=''>
       	{{ csrf_field() }}
		<div class="form-group">
			<div class="row align-items-center">
	  			<div class="col-4" align="center">
	  				<h2>Shipment Data</h2>
	  			</div>
		    	<div class="col-8">
		    		<label for="">Recipient name</label>
					<input class="form-control" type="text" name="trans_penerima" required>

		    		<label for="">Recipient address</label>
					<input class="form-control" type="text" name="trans_alamat" required>

		    		<label for="">Recipient Phone</label>
					<input class="form-control" type="text" name="trans_phone" required>

	       			<input type="hidden" name="selling_id" value="{{$selling_id}}">
	       			<input type="hidden" name="selling_price" value="{{$selling_price}}"><br>
					<input class="btn btn-outline-danger btn-lg" type="submit" name="submit" value="Buy">
					<a class="btn btn-danger" href="/sell">Back</a>
				</div>
			</div>
		</div>
	</form>
@stop