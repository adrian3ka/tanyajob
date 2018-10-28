@extends('layouts.app')

@section('css')
	<link href="{{  asset('css/home.css') }}" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="{{ asset('css/bootstrap-multiselect.css') }}" type="text/css"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
@endsection

@section('content')

<div class="wrapper">
	<div id="dashboard">
		<div class ="pnlTitle">	
			<div class="row title">
				<div class="col-sm-4">PROFIL DIRI</div>
				<a href=" {{  url('/users/'. Auth::user()->id . '/edit') }} ">
					<button class="btnEdit">Edit<img class ="edit-icon" src="{{  asset('img/home/edit.png') }}" width="15px"></button>
				</a>
			</div>
		</div>
		<div class="pnlUserInfo">
		<div class="row user-info">
			<div class="col-sm-4">Tanggal Lahir</div>
			<div class="col-sm-8">{{ isset(Auth::user()->date_of_birth) ? Auth::user()->date_of_birth->format("d M Y") : ""}}</div>
		</div>
		<div class="row user-info">
			<div class="col-sm-4">Pendidikan Terakhir</div>
			<div class="col-sm-8">{{ Auth::user()->lastDegree? Auth::user()->lastDegree->name : "-" }}</div>
		</div>
		<div class="row user-info">
			<div class="col-sm-4">Jurusan</div>
			<div class="col-sm-8">{{ Auth::user()->major? Auth::user()->major->name : "-" }}</div>
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
						<button class="btnAdd">Tambah<img class ="add-icon" src="{{  asset('img/home/add.png') }}" width="10px"></button>
					</a>
				</div>
			</div>
		<div class="pnlExpInfo">
			@foreach (Auth::user()->workExperiences as $exp)
				<div id="dashboard-detail">
					<div class ="incCompany">
					<div class="row company-info">
						<div class="col-sm-12">
							<button class="building"><img class ="building-icon" src="{{  asset('img/home/asset gedung.png') }}" width="20px"></button>
							<div class="col-sm-8">{{ $exp->company_name }}</div>
							<a href=" {{  url('/workexperiences/'. $exp->id . '/edit') }} ">
								<button class="btnEditExp"><img class ="edit-icon" src="{{  asset('img/home/edit.png') }}" width="20px"></button>
							</a>
						</div>
					</div>
					<div class="row user-info">
						<div class="col-sm-4">Bidang Industri</div>
						<div class="col-sm-8">{{ $exp->industry->name }}</div>
					</div>
					<div class="row user-info">
						<div class="col-sm-4">Posisi</div>
						<div class="col-sm-8">{{ $exp->job_position }}</div>
					</div>
					<div class="row user-info">
						<div class="col-sm-4">Jenjang Karir</div>
						<div class="col-sm-8">{{ $exp->job_level->name }}</div>
					</div>
					
					<div class="row user-info">
						<div class="col-sm-4">Gaji</div>
						<div class="col-sm-8">{{ $exp->salary_lower }} - {{ $exp->salary_upper }}</div>
					</div>
					<div class="row user-info">
						<div class="col-sm-4">Lokasi</div>
						<div class="col-sm-8">{{ $exp->location->name }}</div>
					</div>
					<div class="row user-info">
						<div class="col-sm-4">Mulai Bekerja</div>
						<div class="col-sm-8">{{ $exp->started_work_at->format("d M Y") }}</div>
					</div>
					@if($exp->current)
						<div class="row user-info">
							<div class="col-sm-4">Masih Bekerja Disini</div>
						</div>
						@php
							$now = now();
							$diff = Carbon\Carbon::parse($exp->started_work_at)->diff($now)->format('%y Tahun, %m Bulan and %d Hari');
						@endphp
						<div class="row user-info">
							<div class="col-sm-4">Lama Bekerja</div>
							<div class="col-sm-8">{{ $diff }}</div>
						</div>
					@else
						<div class="row user-info">
							<div class="col-sm-4">Selesai Bekerja</div>
							<div class="col-sm-8">{{ isset($exp->ended_work_at) ? $exp->ended_work_at->format("d M Y") : "" }}</div>
						</div>
						@php
							$diff = Carbon\Carbon::parse($exp->started_work_at)->diff( Carbon\Carbon::parse($exp->ended_work_at))->format('%y Tahun, %m Bulan and %d Hari');
						@endphp
						<div class="row user-info">
							<div class="col-sm-4">Lama Bekerja</div>
							<div class="col-sm-8">{{ $diff }}</div>
						</div>
					@endif
				</div>
				</div>
			@endforeach
			<br>
			
		</div>
	</div>
</div>
</div>

@endsection
