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

@section('multiselect')
        <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="css/bootstrap-multiselect/bootstrap-multiselect.css" type="text/css">
        <script type="text/javascript" src="js/bootstrap-multiselect/bootstrap-multiselect.js"></script>

@endsection


@section('content')
<div class="wrapper">
	<div id="dashboard">
		<div class="editProfil">
			@if(!$errors->isEmpty())
				<div class="alert alert-danger">
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</div>
			@endif
			<div class="row title">
				<div class="col-sm-8">EDIT PROFIL DIRI</div>
			</div>
			<form action=" {{ url('users/' . Auth::user()->id ) }}" method="POST">
				{{ csrf_field() }}
				{{ method_field('PUT')}}
				
				<div class="row detail form-group {{ $errors->has('date_of_birth') ? 'has-error' : '' }}" style="padding-top:50px">
					<div class="col-sm-4">Tanggal Lahir</div>	
					<div class="col-sm-8"><input required class="form-control has-error" type="date" name="date_of_birth" value="{{ old('date_of_birth') ? old('date_of_birth') : (Auth::user()->date_of_birth != null ? Auth::user()->date_of_birth->format('Y-m-d') : '') }}"></div>
				</div>
				<div class="row detail form-group {{ $errors->has('gender') ? 'has-error' : '' }}">
					<div class="col-sm-4">Gender</div>
					<div class="col-sm-8">
						<select class="form-control" name="gender" required>
							<option value="0"> Perempuan</option>
							<option value="1"> Laki - laki</option>
						</select>
					</div>
				</div>
				<div class="row detail form-group {{ $errors->has('last_degree_id') ? 'has-error' : '' }}">
					<div class="col-sm-4">Pendidikan Terakhir</div>
					<div class="col-sm-8">
						<select class="form-control" name="last_degree_id">
							@for ($i = 0; $i < $master_degree->count() ; $i++)
								<option value="{{ $master_degree[$i]->id }}" {{ old('last_degree_id') == $master_degree[$i]->id ? "selected" : (Auth::user()->last_degree_id == $master_degree[$i]->id? "selected" : "") }} >{{ $master_degree[$i]->name }} </option>
							@endfor
						</select>
					</div>
				</div>
				<div class="row detail form-group {{ $errors->has('major_id') ? 'has-error' : '' }}">
					<div class="col-sm-4">Jurusan</div>
					<div class="col-sm-8">
						<select required class="form-control" name="major_id">
							@for ($i = 0; $i < $master_major->count() ; $i++)
								<option value="{{ $master_major[$i]->id }}" {{ old('major_id') == $master_major[$i]->id ? "selected" : (Auth::user()->major_id == $master_major[$i]->id? "selected" : "") }}>{{ $master_major[$i]->name }} </option>
							@endfor
						</select>
					</div>
				</div>
				
				<div class="row detail form-group {{ $errors->has('skill_set[]') ? 'has-error' : '' }}">
					<div class="col-sm-4">Kemampuan yang dimiliki</div>
					<div class="col-sm-8">
						<select class="multiple-select" style="width:95%;" name="skill_set_id[]" multiple="multiple">
								@for ($i = 0; $i < $skill_set->count() ; $i++)
									<option value="{{ $skill_set[$i]->id }}" {{ !Auth::user()->skillSets->pluck('id')->intersect($skill_set[$i]->id)->isEmpty() ? "selected" : ""}}>{{ $skill_set[$i]->name }} </option> 
								@endfor
						</select>
												
					</div>
				</div>
				
				<div class="row detail form-group {{ $errors->has('location_id') ? 'has-error' : '' }}">
					<div class="col-sm-4">Lokasi Yang di Inginkan</div>
					<div class="col-sm-8">
						<select class="multiple-select" style="width:95%;" name="location_id[]" multiple="multiple">
								@for ($i = 0; $i < $master_location->count() ; $i++)
									<option value="{{ $master_location[$i]->id }}" {{ !Auth::user()->expectedLocations->pluck('id')->intersect($master_location[$i]->id)->isEmpty() ? "selected" : ""}}>{{ $master_location[$i]->name }} </option> 
								@endfor
						</select>
					</div>
				</div>
				
				<div class="row detail form-group {{ $errors->has('expected_salary_lower') ? 'has-error' : '' }}">
					<div class="col-sm-4">Gaji Minimal Yang Diharapkan</div>
					<div class="col-sm-8">
							<input type="number" class="form-control" name="expected_salary_lower" Placeholder="Minimal" value="{{ old('expected_salary_lower') ? old('expected_salary_lower') : Auth::user()->expected_salary_lower }}" required>
					</div>
				</div>
				
				<div class="row detail form-group {{ $errors->has('expected_salary_upper') ? 'has-error' : '' }}">
					<div class="col-sm-4">Gaji Maximal Yang Diharapkan</div>
					<div class="col-sm-8"><input class="form-control" type="number" name="expected_salary_upper" Placeholder="Maksimal" value="{{ old('expected_salary_upper') ? old('expected_salary_upper') : Auth::user()->expected_salary_upper }}" required></div>
				</div>
				
				
				<div class="row detail form-group {{ $errors->has('skill_set') ? 'has-error' : '' }}">
					<div class="col-sm-4">Fasilitas Yang Diharapkan</div>
					<div class="col-sm-8">
						<select class="multiple-select" style="width:95%;" name="facility_id[]" multiple="multiple">
								@for ($i = 0; $i < $facility->count() ; $i++)
									<option value="{{ $facility[$i]->id }}" {{ !Auth::user()->expectedFacilities->pluck('id')->intersect($facility[$i]->id)->isEmpty() ? "selected" : ""}} >{{ $facility[$i]->name }} </option>
								@endfor
						</select>
					</div>
				</div>
				
				<div class="row detail" style="text-align:center; padding-top:50px; border-bottom: 1px solid #005b96"><button type="submit" class="btn btn-primary">Submit</button></div>
			</form>
		</div>
	</div>
</div>
@endsection

@section('script')
@endsection
