<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />

        <title>Tanya Job</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{  asset('bootstrap_3_3_7/dist/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{  asset('css/app.css') }}" rel="stylesheet" type="text/css">
		<script src="{{ asset('js/jquery_3_3_1.min.js') }}"></</script>
        <script src="{{ asset('bootstrap_3_3_7/dist/js/bootstrap.js') }}"></script>
		@yield('css')
        @yield('script')
    </head>
    <body>
		<div id="wrapper">
			<nav class="navbar navbar-inverse" style="background-color: rgba(255,255,255, 0.6);">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span> 
						</button>
						<a href="{{ url('/consultations') }}" style="margin-left: 10px;"><img src="{{  asset('img/logo-main.png') }}" width="70px"></a>
					</div>
					<div class="collapse navbar-collapse" id="myNavbar">
						<ul class="nav navbar-nav">
							<!--li><a href="{{ url('/home') }}">Home</a></li-->
							<li><a href="{{ url('/consultations') }}">Konsultasi</a></li>
							<li><a href="{{ url('/consultations/recommendation') }}">Rekomendasi</a></li>
							<li><a href="{{ url('/about') }}">About</a></li>
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li>       
								@auth
									<a class = "header-button" href="{{ route('/consultations/recommendation') }}"><span class="glyphicon glyphicon-user"></span> {{ Auth::user()->name }}</a>
								@else
									<a class = "header-button" href="{{ route('register') }}"><span class="glyphicon glyphicon-user"></span> Daftar</a>
								@endauth
							</li>
							              
							@auth
								<li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" >
									<span class="glyphicon glyphicon-log-in"></span> Keluar
								</a></li>
								<form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
									{{ csrf_field() }}
								</form>
							@else
								<li><a href="{{ route('login') }}"><span class="glyphicon glyphicon-log-in"></span> Masuk</a></li>
								<!--li><a href="{{ route('companies/register') }}"><span class="glyphicon glyphicon-home"></span> Perusahaan</a></li-->
							@endauth
						</ul>
					</div>
				</div>
			</nav>
            <div id="content">
				@if($errors->any())
					<h4 class="alert">{{$errors->first()}}</h4>
				@endif
				@yield('content')
            </div>
            
			
        </div>
		<nav class="navbar-wrapper navbar-inverse">
			<div class="container-fluid">
				<p class="navbar-text pull-left">&copy; Tanyajob</p>
				<!--a href="#" class="btn navbar-btn btn-danger pull-right">Subscribe</a--> 
			</div>
		</nav>
    </body>
</html>
