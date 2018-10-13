@extends('layouts.app')

@section('css')
	<link href="{{  asset('css/home.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('content')
<div class="wrapper">
	<div id="dashboard">
		<div class="row title">
			<div class="col-sm-4">PROFIL DIRI</div>
			<button class="btnEdit">Edit<img class ="edit-icon" src="{{  asset('img/home/edit.png') }}" width="30px"></button>
		</div>
		<hr>
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
		
		
	<div id="dashboard">
		<div class="row title">
			<div class="col-sm-4">PENGALAMAN</div>
			<button class="btnAdd">Add<img class ="add-icon" src="{{  asset('img/home/add.png') }}" width="25px"></button>
		</div>
		<hr>
		@for ($i = 0; $i < 4; $i++)
			<div id="dashboard-detail">
				<div class="row user-info">
					<div class="col-sm-12">
						<button class="btnEdit"><img class ="edit-icon" src="{{  asset('img/home/edit.png') }}" width="20px"></button>
					</div>
					<div class="col-sm-4">Perusahaan</div>
					<div class="col-sm-8">PT. Bank Centrak Asia Tbk.</div>
				</div>
				<div class="row user-info">
					<div class="col-sm-4">Bidang Industri</div>
					<div class="col-sm-8">Perbankan</div>
				</div>
				<div class="row user-info">
					<div class="col-sm-4">Posisi</div>
					<div class="col-sm-8">IT Specialitst</div>
				</div>
				<div class="row user-info">
					<div class="col-sm-4">Jenjang Karir</div>
					<div class="col-sm-8">Staff</div>
				</div>
				
				<div class="row user-info">
					<div class="col-sm-4">Gaji</div>
					<div class="col-sm-8">Rp 5.750.000</div>
				</div>
				<div class="row user-info">
					<div class="col-sm-4">Lokasi</div>
					<div class="col-sm-8">Jakarta</div>
				</div>
				<div class="row user-info">
					<div class="col-sm-4">Lama Bekerja</div>
					<div class="col-sm-8">1 Tahun 8 Bulan</div>
				</div>
			</div>
			<hr class="pengalaman">
		@endfor
		<br>
	</div>
</div>
@endsection
