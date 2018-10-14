@extends('layouts.app')

@section('css')
	<link href="{{  asset('css/login.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('content')
<div class="login-icon">
	<img src="{{  asset('img/login/login_icon.png') }}" width=60px>
</div>
<div class="row login-form">
	<form method="POST" action="{{ route('login') }}">
		@csrf

		<div class="form-group">
			<input id="email" placeholder="Email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
			@if ($errors->has('email'))
				<span class="invalid-feedback" role="alert">
					<strong>{{ $errors->first('email') }}</strong>
				</span>
			@endif
		</div>

		<div class="form-group">
			<input id="password" placeholder="Password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

			@if ($errors->has('password'))
				<span class="invalid-feedback" role="alert">
					<strong>{{ $errors->first('password') }}</strong>
				</span>
			@endif
		</div>

		<!--div class="form-group row">
			<div class="col-md-6 offset-md-4">
				<div class="form-check">
					<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

					<label class="form-check-label" for="remember">
						{{ __('Remember Me') }}
					</label>
				</div>
			</div>
		</div-->

		<div class="form-group">
			<button type="submit" class="btn btn-login">
				{{ __('Login') }}
			</button>

			<!--a class="btn btn-link" href="{{ route('password.request') }}">
				{{ __('Forgot Your Password?') }}
			</a-->
		</div>
	</form>
</div>
@endsection
