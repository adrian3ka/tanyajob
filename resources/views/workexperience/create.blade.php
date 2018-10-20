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
		<form action="#" method="POST">
			{{ csrf_field() }}
            {{ method_field('PUT')}}
			<div class="row">
				<div class="col-sm-4">Nama Perusahaan</div>
				<div class="col-sm-8"><input type="text" name="company_name" value=""></div>
			</div>
			<div class="row">
				<div class="col-sm-4">Industri</div>
				<div class="col-sm-8">
					<select name="industry_id">
						@for ($i = 0; $i < $master_industry->count() ; $i++)
							<option value="{{ $master_industry[$i]->id }}">{{ $master_industry[$i]->name }} </option>
						@endfor
					</select>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-4">Posisi</div>
				<div class="col-sm-8"><input type="text" name="job_position" value=""></div>
			</div>
		</form>
	</div>
</div>
@endsection

@section('script')
@endsection

