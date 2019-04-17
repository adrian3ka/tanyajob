@extends('layouts.app')

@section('css')
	<link href="{{  asset('css/consultation/recommendation.css') }}" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="{{ asset('css/bootstrap-multiselect.css') }}" type="text/css"/>
	<!-- Include the default stylesheet -->
	<link rel="stylesheet" type="text/css" href="https://cdn.rawgit.com/wenzhixin/multiple-select/e14b36de/multiple-select.css">
	<!-- Include plugin -->
	<script src="https://cdn.rawgit.com/wenzhixin/multiple-select/e14b36de/multiple-select.js"></script>
@endsection

@section('content')
	<h5 style="color: white;">{{ $data['job_title'][0] }}</h5>

	<div>
		@foreach ($data['data'] as $data)
			<a href="{{ $data['link'] }}">
				<div class="recommendation-box">
					<div> {{ $data['title'] }}</div>
					<div> {{ $data['link'] }}</div>
				</div>
			</a>
		@endforeach
	</div>
@endsection

