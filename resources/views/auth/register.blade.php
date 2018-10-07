@extends('layouts.app')

@section('css')
	<link href="{{  asset('css/register.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('content')
<div class="register-icon">
	<img src="{{  asset('img/register/register_icon.png') }}" width=60px>
</div>
<div class="row register-form">
	<form method="POST" action="{{ route('register') }}">
		@csrf
		<div class="form-group">
			<input placeholder="Nama" id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

			@if ($errors->has('name'))
				<span class="invalid-feedback" role="alert">
					<strong>{{ $errors->first('name') }}</strong>
				</span>
			@endif
		</div>

		<div class="form-group">
			<input placeholder="Email" id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

			@if ($errors->has('email'))
				<span class="invalid-feedback" role="alert">
					<strong>{{ $errors->first('email') }}</strong>
				</span>
			@endif
		</div>

		<div class="form-group">
			<input placeholder="Password" id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

			@if ($errors->has('password'))
				<span class="invalid-feedback" role="alert">
					<strong>{{ $errors->first('password') }}</strong>
				</span>
			@endif
		</div>

		<div class="form-group">
			<input placeholder="Konfirmasi Password" id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
		</div>

		<div class="form-group">
			<button type="submit" class="btn btn-register">
				{{ __('Register') }}
			</button>
		</div>
	</form>
</div>
@endsection
