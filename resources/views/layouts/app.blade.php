<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{  asset('bootstrap_3_3_7/dist/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{  asset('css/app.css') }}" rel="stylesheet" type="text/css">
		@yield('css')
    </head>
    <body>
		<div id="wrapper">
			<div id="header">                   
				@auth
					<a class = "header-button main-logo pull-left" href="{{ url('/home') }}"><img src="{{  asset('img/logo-main.png') }}" width="90px"></a>
					<a class = "header-button" href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
						KELUAR
					</a>

					<form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
						{{ csrf_field() }}
					</form>
				@else
					<a class = "header-button main-logo pull-left" href="{{ url('/') }}"><img src="{{  asset('img/logo-main.png') }}" width="90px"></a>
					<a class = "header-button company" href="#">PERUSAHAAN</a>
					<a class = "header-button" href="{{ route('login') }}">MASUK</a>
					<a class = "header-button" href="{{ route('register') }}">DAFTAR</a>
				@endauth
			</div>

            <div id="content">
				@yield('content')
            </div>
            
			<div id="footer">
				&copy; Tanya Job
			</div>
        </div>
		<script src="{{ asset('js/jquery_3_3_1.min.js') }}"></</script>
        <script src="{{ asset('bootstrap_3_3_7/dist/js/bootstrap.min.js') }}"></script>
    </body>
</html>
