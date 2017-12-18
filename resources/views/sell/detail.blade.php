@extends('layouts.index')
@section('content')
		<div class="row align-items-center">
	  			<div class="col-4" align="center">
	  				<h2>Book Information</h2>
	  			</div>
		    	<div class="col-8">
		    		<div class="row">
						<div class="col-md-4">
									<label>Penjual Buku</label>
								</div>
								<div class="col-md-4">
									{{$user_name}}
								</div>
							</div>
							<div class="row">
								<div class="col-md-4">
									<label>Nama Buku</label>
								</div>
								<div class="col-md-4">
									{{$selling_book_name}}
								</div>
							</div>
							<div class="row">
								<div class="col-md-4">
									<label>Penulis Buku</label>
								</div>
								<div class="col-md-4">
									{{$selling_book_author}}
								</div>
							</div>
							<div class="row">
								<div class="col-md-4">
									<label>Tahun Buku</label>
								</div>
								<div class="col-md-4">
									{{$selling_book_year}}
								</div>
							</div>
							<div class="row">
								<div class="col-md-4">
									<label>Penerbit Buku</label>
								</div>
								<div class="col-md-4">
									{{$selling_book_publisher}}
								</div>
							</div>
							<div class="row">
								<div class="col-md-4">
									<label>Tanggal list buku</label>
								</div>
								<div class="col-md-4">
									{{$selling_date}}
								</div>
							</div>
							<div class="row">
								<div class="col-md-4">
									<label>Harga Buku</label>
								</div>
								<div class="col-md-4">
									Rp {{$selling_price}}
								</div>
							</div>
							<div class="row">
								<div class="col-md-4">
									<label>Saldo Sekarang</label>
								</div>
								<div class="col-md-3">
									Rp {{$saldo[0]->user_saldo}}  
								</div>
								<div class="col-md-2">
									<a href="{{'/profile'}}" class="btn btn-secondary">Top up saldo</a>
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
	  				<h2>Buy Confirmation</h2>
	  			</div>
		    	<div class="col-8">
		    		<label for="">Nama Penerima</label>
					<input class="form-control" type="text" name="trans_penerima">

		    		<label for="">Alamat Penerima</label>
					<input class="form-control" type="text" name="trans_alamat">

		    		<label for="">Nomor Telepon Penerima</label>
					<input class="form-control" type="text" name="trans_phone">

	       			<input type="hidden" name="selling_id" value="{{$selling_id}}">
	       			<input type="hidden" name="selling_price" value="{{$selling_price}}"><br>
					<input class="btn btn-outline-danger btn-lg" type="submit" name="submit" value="Buy">
					<a class="btn btn-danger" href="/sell">Back</a>
				</div>
			</div>
		</div>
	</form>
@stop