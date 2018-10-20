@extends('layouts.app')

@section('css')
	<link href="{{  asset('css/home.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('content')
<div class="wrapper">
	<div id="dashboard">
		<div class ="pnlTitle">	
			<div class="row title">
				<div class="col-sm-4">PROFIL DIRI</div>
				<a href=" {{  url('/users/'. Auth::user()->id . '/edit') }} ">
					<button class="btnEdit">Edit<img class ="edit-icon" src="{{  asset('img/home/edit.png') }}" width="30px"></button>
				</a>
			</div>
		</div>
		<div class="pnlUserInfo">
		<div class="row user-info">
			<div class="col-sm-4">Tanggal Lahir</div>
			<div class="col-sm-8">24 Juli 1997</div>
		</div>
		<div class="row user-info">
			<div class="col-sm-4">Pendidikan Terakhir</div>
			<div class="col-sm-8">S1</div>
		</div>
		<div class="row user-info">
			<div class="col-sm-4">Jurusan</div>
			<div class="col-sm-8">Computer Science</div>
		</div>
		<div class="row user-info">
			<div class="col-sm-4">Kemampuan</div>
			<div class="col-sm-8">
				<span class="label label-primary">PHP</span>
				<span class="label label-primary">Javascript</span>
				<span class="label label-primary">MySQL</span>
				<span class="label label-primary">COBOL</span>
			</div>
		</div>
		<div class="row user-info">
			<div class="col-sm-4">Bersedia Ditempatkan</div>
			<div class="col-sm-8">DKI-Jakarta</div>
		</div>
		<div class="row user-info">
			<div class="col-sm-4">Ekspetasi Gaji</div>
			<div class="col-sm-8">Rp 15.000.000,- hingga Rp 25.000.000,-</div>
		</div>
		<div class="row user-info">
			<div class="col-sm-4">Fasilitas Yang Diharapkan</div>
			<div class="col-sm-8">
				<span class="label label-success">Makan Siang</span>
				<span class="label label-success">Makan Malam</span>
				<span class="label label-success">Gaji Net</span>
				<span class="label label-success">Asuransi Kesehatan</span>
			</div>
		</div>
		</div>
	</div>
		
		
	<div id="dashboard">
		<div class ="pnlTitle">	
			<div class="row title">
				<div class="col-sm-4">PENGALAMAN</div>
					<a href="{{  url('/workexperiences/create') }} ">
						<button class="btnAdd">Add<img class ="add-icon" src="{{  asset('img/home/add.png') }}" width="25px"></button>
					</a>
				</div>
			</div>
		<div class="pnlExpInfo">
			@for ($i = 0; $i < 2; $i++)
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
						<div class="col-sm-8">IT Specialist</div>
					</div>
					<div class="row user-info">
						<div class="col-sm-4">Jenjang Karir</div>
						<div class="col-sm-8">Staff</div>
					</div>
					
					<div class="row user-info">
						<div class="col-sm-4">Gaji</div>
						<div class="col-sm-8">Rp 5.750.000,-</div>
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
			@endfor
			<br>
			
		</div>
	</div>
</div>
@endsection
