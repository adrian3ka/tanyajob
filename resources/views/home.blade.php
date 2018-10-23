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
			<div class="col-sm-8">{{ Auth::user()->date_of_birth }}</div>
		</div>
		<div class="row user-info">
			<div class="col-sm-4">Pendidikan Terakhir</div>
			<div class="col-sm-8">{{ Auth::user()->lastDegree->name }}</div>
		</div>
		<div class="row user-info">
			<div class="col-sm-4">Jurusan</div>
			<div class="col-sm-8">{{ Auth::user()->major->name }}</div>
		</div>
		<div class="row user-info">
			<div class="col-sm-4">Kemampuan</div>
			<div class="col-sm-8">
				@foreach (Auth::user()->skillSets as $skill)
					<span class="label label-primary">{{ $skill->name }}</span>
				@endforeach
			</div>
		</div>
		<div class="row user-info">
			<div class="col-sm-4">Bersedia Ditempatkan</div>
			<div class="col-sm-8">
				@foreach (Auth::user()->expectedLocations as $loc)
					<span class="label label-primary">{{ $loc->name }}</span>
				@endforeach</div>
		</div>
		<div class="row user-info">
			<div class="col-sm-4">Ekspetasi Gaji</div>
			<div class="col-sm-8">Rp. {{ Auth::user()->expected_salary_lower}}, -  hingga Rp. {{ Auth::user()->expected_salary_upper }}, -</div>
		</div>
		<div class="row user-info">
			<div class="col-sm-4">Fasilitas Yang Diharapkan</div>
			<div class="col-sm-8">
				@foreach (Auth::user()->expectedFacilities as $f)
					<span class="label label-success">{{ $f->name }}</span>
				@endforeach</div>
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
					<div class ="incCompany">
					<div class="row company-info">
						<div class="col-sm-12">
							<button class="building"><img class ="building-icon" src="{{  asset('img/home/asset gedung.png') }}" width="20px"></button>
							<div class="col-sm-8">PT. Bank Central Asia Tbk.</div>
							<button class="btnEditExp"><img class ="edit-icon" src="{{  asset('img/home/edit.png') }}" width="20px"></button>
						</div>
						<!--div class="col-sm-4">Perusahaan</div-->
						
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
				</div>
			@endfor
			<br>
			
		</div>
	</div>
</div>
@endsection
