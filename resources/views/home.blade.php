@extends('layouts.app')

@section('css')
	<link href="{{  asset('css/home.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('content')
<div class="wrapper">
	<div id="dashboard">
		<div class="row user-info">
			<div class="col-sm-4">Tanggal Lahir</div>
			<div class="col-sm-8">DD/MM/YYYY</div>
		</div>
		<div class="row user-info">
			<div class="col-sm-4">Pendidikan Terakhirr</div>
			<div class="col-sm-8">XXXXXXXXX</div>
		</div>
		<div class="row user-info">
			<div class="col-sm-4">Jurusan</div>
			<div class="col-sm-8">XXXXXXXXXXXXXX</div>
		</div>
		<div class="row user-info">
			<div class="col-sm-4">Kemampuan Yang Dimiliki</div>
			<div class="col-sm-8">X , X , X , X</div>
		</div>
		<div class="row user-info">
			<div class="col-sm-4">Bersedia Ditempatkan Di</div>
			<div class="col-sm-8">XXXXXXXXXXXXXXXXXX</div>
		</div>
		<div class="row user-info">
			<div class="col-sm-4">Gaji Yang Diharapkan </div>
			<div class="col-sm-8">XXXXXXXXXXX - YYYYYYYYYYYYYYY</div>
		</div>
		<div class="row user-info">
			<div class="col-sm-4">Fasilitas Yang Diharapkan</div>
			<div class="col-sm-8">X, X, X, X, X</div>
		</div>
	</div>
</div>
@endsection
