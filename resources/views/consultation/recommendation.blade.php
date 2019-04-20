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
	<h5 style="color: white;">Rekomendasi Pekerjaan Untuk Anda : {{ implode(", ", $data['job_title']) }}</h5>

	<div>
		@foreach ($data['data'] as $d)
			<a href="{{ $d['link'] }}">
				<div class="recommendation-box">
					<div> {{ $d['title'] }}</div>
					<div> {{ $d['link'] }}</div>
				</div>
			</a>
		@endforeach
	</div>
	<span class="pagination"><a href="{{ url('/consultations/recommendation?page=1') }}">First</a></span>
	@for ($i = $start_page; $i <= $last_page; $i++)
		<span class="pagination {{($i == $current_page ? 'active' : '')}}"><a href="{{ url('/consultations/recommendation?page=' . $i) }}">{{ $i }} </a></span>
	@endfor
	
	<span class="pagination"><a href="{{ url('/consultations/recommendation?page=' . $final_page) }}">Last</a></span>
@endsection

