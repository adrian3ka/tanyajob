@extends('layouts.app')

@section('css')
	<link href="{{  asset('css/user/edit.css') }}" rel="stylesheet" type="text/css">
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
		
		<div class="row title">
			<div class="col-sm-4">EDIT PROFIL DIRI</div>
				<button class="btnEdit">Edit<img class ="edit-icon" src="{{  asset('img/home/edit.png') }}" width="30px"></button>
			</a>
		</div>
		<hr>
		<form action=" {{ url('users/' . Auth::user()->id ) }}" method="POST">
			{{ csrf_field() }}
            {{ method_field('PUT')}}
			<div class="row">
				<div class="col-sm-4">Tanggal Lahir</div>
				<div class="col-sm-8"><input type="date" name="date_of_birth" value="{{ Auth::user()->date_of_birth != null ? Auth::user()->date_of_birth->format('Y-m-d') : ''}}"></div>
			</div>
			<div class="row">
				<div class="col-sm-4">Pendidikan Terakhir</div>
				<div class="col-sm-8">
					<select name="last_degree_id">
						@for ($i = 0; $i < $master_degree->count() ; $i++)
							<option value="{{ $master_degree[$i]->id }}">{{ $master_degree[$i]->name }} </option>
						@endfor
					</select>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-4">Jurusan</div>
				<div class="col-sm-8">
					<select name="major_id">
						@for ($i = 0; $i < $master_major->count() ; $i++)
							<option value="{{ $master_major[$i]->id }}">{{ $master_major[$i]->name }} </option>
						@endfor
					</select>
				</div>
			</div>
			
			<div class="row">
				<div class="col-sm-4">Kemampuan yang dimiliki</div>
				<div class="col-sm-8">
					<select class="multiple-select" name="skill_set[]" multiple="multiple">
							@for ($i = 0; $i < $skill_set->count() ; $i++)
								<option value="{{ $skill_set[$i]->id }}">{{ $skill_set[$i]->name }} </option>
							@endfor
					</select>
				</div>
			</div>
			
			<div class="row">
				<div class="col-sm-4">Lokasi Yang Diharapkan</div>
				<div class="col-sm-8">
					<select name="location_id">
						@for ($i = 0; $i < $master_location->count() ; $i++)
							<option value="{{ $master_location[$i]->id }}">{{ $master_location[$i]->name }} </option>
						@endfor
					</select>
				</div>
			</div>
			
			<div class="row">
				<div class="col-sm-4">Gaji Minimal Yang Diharapkan</div>
				<div class="col-sm-8"><input type="number" name="expected_salary_lower" ></div>
			</div>
			
			<div class="row">
				<div class="col-sm-4">Gaji Maximal Yang Diharapkan</div>
				<div class="col-sm-8"><input type="number" name="expected_salary_upper"></div>
			</div>
			
			
			<div class="row">
				<div class="col-sm-4">Kemampuan yang dimiliki</div>
				<div class="col-sm-8">
					<select class="multiple-select" name="skill_set[]" multiple="multiple">
							@for ($i = 0; $i < $facility->count() ; $i++)
								<option value="{{ $facility[$i]->id }}">{{ $facility[$i]->name }} </option>
							@endfor
					</select>
				</div>
			</div>
			
			<input type="submit">
		</form>
	</div>
</div>
@endsection

@section('script')
@endsection
