@extends('layouts.app')

@section('css')
	<link href="{{  asset('css/workexperience/create.css') }}" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="{{ asset('css/bootstrap-multiselect.css') }}" type="text/css"/>
	<!-- Include the default stylesheet -->
	<link rel="stylesheet" type="text/css" href="https://cdn.rawgit.com/wenzhixin/multiple-select/e14b36de/multiple-select.css">
	<!-- Include plugin -->
	<script src="https://cdn.rawgit.com/wenzhixin/multiple-select/e14b36de/multiple-select.js"></script>
@endsection

@section('script')
	<script type="text/javascript" src=" {{ asset('js/bootstrap-multiselect.js') }} "></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$(".multiple-select").multipleSelect({
				filter: true
			});
		});
	</script>
@endsection

@section('content')
<div class="wrapper">
	<div id="dashboard">
<<<<<<< Updated upstream
			<div class="row title">
				<div class="col-sm-4">TAMBAH PENGALAMAN</div>
			</div>
		<div class="col-md-4 bg"></div>
		<div class="col-md-4 bg">
		<form action="#" method="POST">
			{{ csrf_field() }}
            {{ method_field('PUT')}}
			<div class="row">
				<div class="col-sm-4">Nama Perusahaan</div>
				<div class="col-sm-8"><input type="text" name="company_name" value=""></div>
=======
		<div class="workExp">
			<div class="row title">
				<div class="col-sm-8">TAMBAH PENGALAMAN</div>
>>>>>>> Stashed changes
			</div>
			<form action="#" method="POST" class="form-group">
				{{ csrf_field() }}
				{{ method_field('PUT')}}
				<div class="row detail">
					<div class="col-sm-4">Nama Perusahaan</div>
					<div class="col-sm-8"><input class="form-control" type="text" name="company_name" value=""></div>
				</div>
				<div class="row detail">
					<div class="col-sm-4">Industri</div>
					<div class="col-sm-8">
						<select class="form-control" name="industry_id">
							@for ($i = 0; $i < $master_industry->count() ; $i++)
								<option value="{{ $master_industry[$i]->id }}">{{ $master_industry[$i]->name }} </option>
							@endfor
						</select>
					</div>
				</div>
				<div class="row detail">
					<div class="col-sm-4">Posisi</div>
					<div class="col-sm-8"><input class="form-control" type="text" name="job_position" value=""></div>
				</div>
<<<<<<< Updated upstream
			</div>
			
			
			<div class="row">
				<div class="col-sm-4">Tanggal Mulai</div>
				<div class="col-sm-8"><input type="date" name="start_date" value=""></div>
			</div>
			
			<div class="row">
				<div class="col-sm-4">Tanggal Selesai</div>
				<div class="col-sm-8"><input type="date" name="end_date" value=""></div>
			</div>
			<div class="row">
				<div class="col-sm-12"><input type="checkbox" name="current" value="">Masih Bekerja Di Sini</div>
			</div>
			
			<input type="submit">
		</form>
		</div>
		<div class="col-md-4 bg"></div>
=======
				<div class="row detail">
					<div class="col-sm-4">Jenjang Karir</div>
					<div class="col-sm-8">
						<select class="form-control" name="job_level_id">
							@for ($i = 0; $i < $master_job_level->count() ; $i++)
								<option value="{{ $master_job_level[$i]->id }}">{{ $master_job_level[$i]->name }} </option>
							@endfor
						</select>
					</div>
				</div>
				<div class="row detail">
					<div class="col-sm-4">Gaji Awal</div>
					<div class="col-sm-8"><input class="form-control" type="number" name="expected_salary_lower" ></div>
				</div>
				
				<div class="row detail">
					<div class="col-sm-4">Gaji Akhir</div>
					<div class="col-sm-8"><input class="form-control" type="number" name="expected_salary_upper"></div>
				</div>
				<div class="row detail">
					<div class="col-sm-4">Lokasi Yang Diharapkan</div>
					<div class="col-sm-8">
						<select class="form-control" name="location_id">
							@for ($i = 0; $i < $master_location->count() ; $i++)
								<option value="{{ $master_location[$i]->id }}">{{ $master_location[$i]->name }} </option>
							@endfor
						</select>
					</div>
				</div>
				
				
				<div class="row detail">
					<div class="col-sm-4">Tanggal Masuk</div>
					<div class="col-sm-8"><input class="form-control" type="date" name="start_date" value=""></div>
				</div>
				
				<div class="row detail">
					<div class="col-sm-4">Tanggal Selesai</div>
					<div class="col-sm-5"><input class="form-control" type="date" name="end_date" value=""></div>
					<div class="col-sm-3"><input type="checkbox" name="current" value="">Masih Bekerja Di Sini</div>
				</div>
				<div class="row detail">
					<div class="row detail" style="text-align:center; padding-top:50px;"><button type="submit" class="btn btn-primary">Submit</button></div>
				</div>
			</form>
		</div>
>>>>>>> Stashed changes
	</div>
</div>
@endsection

@section('script')
@endsection

