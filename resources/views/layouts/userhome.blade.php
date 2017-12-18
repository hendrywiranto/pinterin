@extends('layouts.index')
@section('content')
	
	<div class="container">
	<div class="row">
		<div class="col">
		<h1>Welcome to pinter.in</h1>
		</div>
	</div>
	<div class="row">
		<div class="col">
			<p>Solusi ter-BAEK untuk yang pengen beli buku, tapi males ke mana-mana...</p>
			<p>Atau yang pengen beli buku, tapi mau nya bekas? <b>#murahananjing</b></p>

			<h3>pinter.in itu apa?</h3>
			<p>pinter.in adalah salah satu inovasi dari mahasiswa-mahasiswa kebanggaan Informatika ITS, dimana Anda tidak perlu khawatir lagi jika :</p>
			<ol>
				<li>Pengen buang buku bekas kalian</li>
				<li>Pengen beli buku bekas <b>#murahangua</b></li>
				<li>Pengen beliin <b>pacar</b> hadiah buku, biar makin pintar</li>
				<li>Pengen request beli buku IMPIAN dengan harga IMPIAN JUGA</li>
			</ol>

			<h3>pinter.in itu buatan siapa?</h3>
			<p>pinter.in itu buatan</p>
			<ul>
				<li>Hendry Wiranto</li>
				<li>Hendro <b>Wiranto</b></li>
				<li>HAWEK</li>
				<li><i>BEBEK</i> HW</li>
				<li>and Wiranto's Fam</li>
			</ul>
		</div>
	</div>
	<div class="row">
		<div class="col">
			<h3>BOOM! Bingung?</h3>
		</div>
	</div>
	<div class="row align-items-center">
		<div class="col-6">
			<p>Langsung aja klik tombol di samping ini:</p>
		</div>
		<div class="col-3">
			<a class="btn btn-info nav-link" href="{{'/request'}}">Request</a>
		</div>
		<div class="col-3">
			<a class="btn btn-info nav-link" href="{{'/sell'}}">Sell</a>
		</div>
	</div><br>
</div>
@stop