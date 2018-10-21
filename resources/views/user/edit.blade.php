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
				noneSelectedText: 'Select Something (required)',
				filter: true
			});
		});
	</script>
@endsection

@section('content')
<div class="wrapper">
	<div id="dashboard">
		@if(!$errors->isEmpty())
			<div class="alert alert-danger">
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</div>
		@endif
		<div class="row title">
			<div class="col-sm-4">EDIT PROFIL DIRI</div>
		</div>
		<hr>
		<form action=" {{ url('users/' . Auth::user()->id ) }}" method="POST">
			{{ csrf_field() }}
            {{ method_field('PUT')}}
			<div class="row detail form-group {{ $errors->has('date_of_birth') ? 'has-error' : '' }}">
				<div class="col-sm-4">Tanggal Lahir</div>
				<div class="col-sm-8"><input required class="form-control has-error" type="date" name="date_of_birth" value="{{ Auth::user()->date_of_birth != null ? Auth::user()->date_of_birth->format('Y-m-d') : ''}}"></div>
			</div>
			<div class="row detail form-group {{ $errors->has('last_degree_id') ? 'has-error' : '' }}">
				<div class="col-sm-4">Pendidikan Terakhir</div>
				<div class="col-sm-8">
					<select class="form-control" name="last_degree_id">
						@for ($i = 0; $i < $master_degree->count() ; $i++)
							<option value="{{ $master_degree[$i]->id }}">{{ $master_degree[$i]->name }} </option>
						@endfor
					</select>
				</div>
			</div>
			<div class="row detail form-group {{ $errors->has('major_id') ? 'has-error' : '' }}">
				<div class="col-sm-4">Jurusan</div>
				<div class="col-sm-8">
					<select required class="form-control" name="major_id">
						@for ($i = 0; $i < $master_major->count() ; $i++)
							<option value="{{ $master_major[$i]->id }}">{{ $master_major[$i]->name }} </option>
						@endfor
					</select>
				</div>
			</div>
			
			<div class="row detail form-group {{ $errors->has('skill_set[]') ? 'has-error' : '' }}">
				<div class="col-sm-4">Kemampuan yang dimiliki</div>
				<div class="col-sm-8">
					<select class="multiple-select" style="width:95%;" name="skill_set[]" multiple="multiple">
							@for ($i = 0; $i < $skill_set->count() ; $i++)
								<option value="{{ $skill_set[$i]->id }}">{{ $skill_set[$i]->name }} </option> 
							@endfor
					</select>
				</div>
			</div>
			
			<div class="row detail form-group {{ $errors->has('location_id') ? 'has-error' : '' }}">
				<div class="col-sm-4">Lokasi Yang di Inginkan</div>
				<div class="col-sm-8">
					<select class="multiple-select" style="width:95%;" name="location_id[]" multiple="multiple">
							@for ($i = 0; $i < $master_location->count() ; $i++)
								<option value="{{ $master_location[$i]->id }}">{{ $master_location[$i]->name }} </option> 
							@endfor
					</select>
				</div>
			</div>
			
			<div class="row detail form-group {{ $errors->has('expected_salary_lower') ? 'has-error' : '' }}">
				<div class="col-sm-4">Gaji Minimal Yang Diharapkan</div>
				<div class="col-sm-8"><input type="number" class="form-control" name="expected_salary_lower" Placeholder="Minimal" value="{{ Auth::user()->expected_salary_lower }}" required></div>
			</div>
			
			<div class="row detail form-group {{ $errors->has('expected_salary_upper') ? 'has-error' : '' }}">
				<div class="col-sm-4">Gaji Maximal Yang Diharapkan</div>
				<div class="col-sm-8"><input class="form-control" type="number" name="expected_salary_upper" Placeholder="Maksimal" value="{{ Auth::user()->expected_salary_upper }}" required></div>
			</div>
			
			
			<div class="row detail form-group {{ $errors->has('skill_set') ? 'has-error' : '' }}">
				<div class="col-sm-4">Kemampuan yang dimiliki</div>
				<div class="col-sm-8">
					<select class="multiple-select" style="width:95%;" name="skill_set[]" multiple="multiple">
							@for ($i = 0; $i < $facility->count() ; $i++)
								<option value="{{ $facility[$i]->id }}">{{ $facility[$i]->name }} </option>
							@endfor
					</select>
				</div>
			</div>
			<div class="row detail" style="text-align:center; padding-top:50px;"><button type="submit" class="btn btn-primary">Submit</button></div>
		</form>
	</div>
</div>
@endsection

@section('script')
@endsection
