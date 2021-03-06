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
		var getQuestionUrl = "{{ url("/consultations/get/question") }}";
		var extractInformationUrl = "{{ url("/consultations/extract/information") }}";
		function getNextQuestion(url){
			var jsonData;
			$.ajax({
				async: false,
				type: "GET",
				url: url,
				success : function(data) {
					try {
						jsonData = JSON.parse(data);
					} catch {
						console.log(data);
						jsonData = JSON.parse('{"question" : "Server can\'t be reach now"}');
					}
				}
			});
			$("#content-chat").append('<p class="bot-chat chat">'+jsonData['question']+'</p>');
			return ;
		}
		
		function displayGreeting () {
			var greeting = "{{ $greeting['question'] }}";
			
			if (greeting !== "") {
				$("#content-chat").append('<p class="bot-chat chat">'+greeting+'</p>');
			}
		}
		function extractInformation(url, data){
			console.log(data);
			$('meta[name="csrf-token"]').attr('content');
			$.ajax({
				async: false,
				type: "POST",
				url: url,
				data: data,
				success : function(data) {
					console.log(data);
				}
			});
			return ;
		}
		
		window.addEventListener('load', function () {
			displayGreeting ();
			$("#txt-message").val('');
			getNextQuestion(getQuestionUrl);
			$("#form-chat-bot").submit(function(e){
				var message = $("#txt-message").val();
				console.log(message);
				
				if (message == "") {
					alert("Harap isi kolom chat terlebih dahulu");
					return false;
				}
				e.preventDefault();
				$("#content-chat").append('<p class="user-chat chat">' + message + '</p>');

				extractInformation(extractInformationUrl, {
					"_token": "{{ csrf_token() }}",
					'text' : message
				});
				getNextQuestion(getQuestionUrl);
				$("#txt-message").val('');                 
				
				$("#content-chatbot").animate({ scrollTop: $("#content-chatbot")[0].scrollHeight}, 1000);
				return false;
				
			});
		});
	</script>
@endsection


@section('content')
	<div id ="header-chatbot">Mulai Konsultasimu Disini</div>
	<div id ="content-chatbot">
		<div id="content-chat">
			
		</div>
		
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
		
	
	
		
@endsection
