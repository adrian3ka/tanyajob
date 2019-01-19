@extends('layouts.app')

@section('css')
	<link href="{{  asset('css/consultation/index.css') }}" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="{{ asset('css/bootstrap-multiselect.css') }}" type="text/css"/>
	<!-- Include the default stylesheet -->
	<link rel="stylesheet" type="text/css" href="https://cdn.rawgit.com/wenzhixin/multiple-select/e14b36de/multiple-select.css">
	<!-- Include plugin -->
	<script src="https://cdn.rawgit.com/wenzhixin/multiple-select/e14b36de/multiple-select.js"></script>
@endsection

@section('script')
	<script type="text/javascript">
		$(document).ready(function() {
			$("#form-chat-bot").submit(function(e){
				var message = $("#txt-message").val();
				console.log(message);
				e.preventDefault();
				$("#content-chat").append('<p class="user-chat chat">'+message+'</p>'); 
				var url = "{{ url("/consultations/get/question") }}"; 
				var con="{{config ('api.ask')}}";
				console.log ("config: " + con);
				$.get(url, function(data, status){
					console.log("Data: " + data + "\nStatus: " + status);
					var jsonData = JSON.parse(data);
					console.log(jsonData);
					$("#content-chat").append('<p class="bot-chat chat">'+jsonData['question']+'</p>'); 
				});
				return false;
			});
		});
	</script>
@endsection


@section('content')
	<div id ="header-chatbot">Start your consultation!</div>
	<div id ="content-chatbot">
		<div id="content-chat">
			<p class="bot-chat chat"> Haiii kantikaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>
			<p class="user-chat chat"> Haiii juga bot</p>
			<p class="bot-chat chat"> Lagi apa?</p>
			<p class="user-chat chat"> Lagi mainnnnnnnnnnnnnnnnnnnn</p>
		</div>
		
		
		<form class="form-horizontal"  id="form-chat-bot">
			<div class="form-group">
				<div class="col-sm-11"> 
					<input type="text" class="form-control" id="txt-message" placeholder="Type your message here" name="txt-message">
				</div>
				<div class="col-sm-1">
					<button type="submit" class="btn btn-default" style="width:100%;">Send</button>
				</div>
			</div>
		</form>

	
	</div>
		
@endsection
