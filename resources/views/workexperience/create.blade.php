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
	<script type="text/javascript">
		$(document).ready(function() {
			var salary_range = {{ json_encode($salary_range) }} ;
			var checkbox = $('#current');    
			$('#current').on('click',function () {
				if (checkbox.is(':checked')) {
					$('#ended_work_at').val(null);
					$('#ended_work_at').prop('disabled', true);
				} else {
					$('#ended_work_at').prop('disabled', false);
				}
			});
			$('#salary_range').change(function() {
				var index = $(this).children('option:selected').index();
				$('#salary_lower').val(salary_range[index-1][0]);
				$('#salary_upper').val(salary_range[index-1][1]);
			});
		});
		
	</script>
@endsection

@section('content')
<div class="wrapper">
	<div id="dashboard">
		<div class="workExp">
			@if(!$errors->isEmpty())
				<div class="alert alert-danger">
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</div>
			@endif
			<div class="row title">
				<div class="col-sm-8">TAMBAH PENGALAMAN</div>
			</div>
			<form action="{{ url('workexperiences/') }}" method="POST" class="form-group">
				{{ csrf_field() }}
				<div class="row detail" style="padding-top:50px;">
					<div class="col-sm-4">Nama Perusahaan</div>
					<div class="col-sm-8"><input class="form-control" type="text" name="company_name" value="{{ old('company_name') }}" placeholder="Contoh: PT. ABC"></div>
				</div>
				<div class="row detail">
					<div class="col-sm-4">Bidang Industri</div>
					<div class="col-sm-8">
						<select class="form-control" name="industry_id">
							<option value="" disabled selected>--Pilih--</option>
							@for ($i = 0; $i < $master_industry->count() ; $i++)
								<option value="{{ $master_industry[$i]->id }}" {{ old('industry_id') ==  $master_industry[$i]->id ? "selected" : ""}}>{{ $master_industry[$i]->name }} </option>
							@endfor
						</select>
					</div>
				</div>
				
				<div class="row detail">
					<div class="col-sm-4">Bidang Pekerjaan</div>
					<div class="col-sm-8">
						<select class="form-control" name="field_id">
							<option value="" disabled selected>--Pilih--</option>
							@for ($i = 0; $i < $master_field->count() ; $i++)
								<option value="{{ $master_field[$i]->id }}" {{ old('field_id') ==  $master_field[$i]->id ? "selected" : ""}}>{{ $master_field[$i]->name }} </option>
							@endfor
						</select>
					</div>
				</div>
				
				<div class="row detail">
					<div class="col-sm-4">Posisi</div>
					<div class="col-sm-8"><input class="form-control" type="text" name="job_position" value="{{ old('job_position') }}" Placeholder="Contoh: IT Specialist; IT Analyst "></div>
				</div>
				<div class="row detail">
					<div class="col-sm-4">Jenjang Karir</div>
					<div class="col-sm-8">
						<select class="form-control" name="job_level_id">
							<option value="" disabled selected>--Pilih--</option>
							@for ($i = 0; $i < $master_job_level->count() ; $i++)
								<option value="{{ $master_job_level[$i]->id }}" {{ old('job_level_id') ==  $master_job_level[$i]->id ? "selected" : ""}}>{{ $master_job_level[$i]->name }} </option>
							@endfor
						</select>
					</div>
				</div>
				<div class="row detail">
					<div class="col-sm-4">Gaji per bulan</div>
					<div class="col-sm-8">
						<select class="form-control" id="salary_range">
							<option value="" disabled selected>--Pilih--</option>
							@for ( $i = 0 ; $i < count($salary_range) ; $i ++ ) 
								<option {{old('salary_upper') == $salary_range[$i][1] ? "selected" : ""}} > 
									Rp {{ number_format($salary_range[$i][0],2,',','.') }} - Rp {{ number_format($salary_range[$i][1],2,',','.')}}
								</option>
							@endfor
						</select>
					</div>
				</div>
				<div class="row detail hidden">
					<div class="col-sm-4">Gaji Awal</div>
					<div class="col-sm-8"><input id="salary_lower" class="form-control" type="number" name="salary_lower" value="{{ old('salary_lower') }}"></div>
				</div>
				<div class="row detail hidden">
					<div class="col-sm-4">Gaji Akhir</div>
					<div class="col-sm-8"><input id="salary_upper" class="form-control" type="number" name="salary_upper" value="{{ old('salary_upper') }}"></div>
				</div>
				<div class="row detail">
					<div class="col-sm-4">Lokasi</div>
					<div class="col-sm-8">
						<select class="form-control" name="location_id">
							<option value="" disabled selected>--Pilih--</option>
							@for ($i = 0; $i < $master_location->count() ; $i++)
								<option value="{{ $master_location[$i]->id }}" {{ old('location_id') ==  $master_location[$i]->id ? "selected" : ""}}>{{ $master_location[$i]->name }} </option>
							@endfor
						</select>
					</div>
				</div>
				
				
				<div class="row detail">
					<div class="col-sm-4">Tanggal Masuk</div>
					<div class="col-sm-8"><input class="form-control" type="date" name="started_work_at" value="{{ old('started_work_at') }}"></div>
				</div>
				
				<div class="row detail">
					<div class="col-sm-4">Tanggal Selesai</div>
					<div class="col-sm-5"><input id ="ended_work_at" class="form-control" type="date" name="ended_work_at" value="{{ old('ended_work_at') }}"></div>
					<div class="col-sm-3"><input id="current" type="checkbox" name="current" value="1" {{ old('current') == "1" ? "checked" : ""}} >Masih Bekerja Di Sini</div>
				</div>
				<div class="row detail" style="text-align:center; padding-top:50px; border-bottom:1px solid #005b96"><button type="submit" class="btn btn-primary">Submit</button></div>
			</form>
		</div>
	</div>
</div>
@endsection
