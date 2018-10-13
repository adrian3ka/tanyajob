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
			<div class="col-sm-4">Pendidikan Terakhir</div>
			<div class="col-sm-8">XXXXXXXXX</div>
		</div>
		<div class="row user-info">
			<div class="col-sm-4">Jurusan</div>
			<div class="col-sm-8">XXXXXXXXXXXXXX</div>
		</div>
		<div class="row user-info">
			<div class="col-sm-4">Kemampuan</div>
			<div class="col-sm-8">X , X , X , X</div>
		</div>
		<div class="row user-info">
			<div class="col-sm-4">Bersedia Ditempatkan</div>
			<div class="col-sm-8">XXXXXXXXXXXXXXXXXX</div>
		</div>
		<div class="row user-info">
			<div class="col-sm-4">Ekspetasi Gaji</div>
			<div class="col-sm-8">XXXXXXXXXXX - YYYYYYYYYYYYYYY</div>
		</div>
		<div class="row user-info">
			<div class="col-sm-4">Fasilitas Yang Diharapkan</div>
			<div class="col-sm-8">X, X, X, X, X</div>
		</div>
	</div>
	@for ($i = 0; $i < 4; $i++)
		<div id="dashboard-detail">
			<div class="row user-info">
				<div class="col-sm-4">Perusahaan</div>
				<div class="col-sm-8">DD/MM/YYYY</div>
			</div>
			<div class="row user-info">
				<div class="col-sm-4">Bidang Industri</div>
				<div class="col-sm-8">XXXXXXXXXX</div>
			</div>
			<div class="row user-info">
				<div class="col-sm-4">Posisi</div>
				<div class="col-sm-8">XXXXXXXXXX</div>
			</div>
			<div class="row user-info">
				<div class="col-sm-4">Jenjang Karir</div>
				<div class="col-sm-8">XXXXXXXXXXX</div>
			</div>
			
			<div class="row user-info">
				<div class="col-sm-4">Gaji</div>
				<div class="col-sm-8">XXXXXXXXXx - YYYYYYYYYYYYYYYY</div>
			</div>
			<div class="row user-info">
				<div class="col-sm-4">Lokasi</div>
				<div class="col-sm-8">XXXXXXXXXX</div>
			</div>
			<div class="row user-info">
				<div class="col-sm-4">Lama Bekerja</div>
				<div class="col-sm-8">XXXXXXXXX Month</div>
			</div>
		</div>
	@endfor
	<br>
</div>
@endsection
