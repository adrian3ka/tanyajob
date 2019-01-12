@extends('layouts.app')

@section('css')
	<link href="{{  asset('css/consultation/index.css') }}" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="{{ asset('css/bootstrap-multiselect.css') }}" type="text/css"/>
	<!-- Include the default stylesheet -->
	<link rel="stylesheet" type="text/css" href="https://cdn.rawgit.com/wenzhixin/multiple-select/e14b36de/multiple-select.css">
	<!-- Include plugin -->
	<script src="https://cdn.rawgit.com/wenzhixin/multiple-select/e14b36de/multiple-select.js"></script>
@endsection


@section('content')
	<div id ="header-chatbot">Start your consultation!</div>
	<div id ="content-chatbot">
		<p class="bot-chat chat"> Haiii kantikaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>
		<p class="user-chat chat"> Haiii juga bot</p>
		<p class="bot-chat chat"> Lagi apa?</p>
		<p class="user-chat chat"> Lagi mainnnnnnnnnnnnnnnnnnnn</p>
		
		
		<form class="form-horizontal" action="/action_page.php">
			<div class="form-group">
				
				<div class="col-sm-11"> 
					<input type="text" class="form-control" id="email" placeholder="Type your message here" name="txt-message">
				</div>
				<div class="col-sm-1">
					<button type="submit" class="btn btn-default" style="width:100%;">Send</button>
				</div>
			</div>
		</form>

	
	</div>
		
@endsection
