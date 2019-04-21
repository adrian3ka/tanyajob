@extends('layouts.app')

@section('css')
	<link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css"/>
	<link rel="stylesheet" href="{{ asset('css/bootstrap-multiselect.css') }}" type="text/css"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
@endsection

@section('content')
<div class="wrapper">
	<p style="
	width: 80%;
    margin: auto;
    background: rgba(200,200,200,0.6);
    padding: 10px;
    border-radius: 3px;
    border: 1px solid white;
    box-shadow: 2px 2px 4px 0px beige;
    color: #000000;
    font-size: 15px;">Selamat datang pada website kami, website ini dibuat dengan tujuan dapat membantu para
    pengguna agar memperoleh pekerjaan yang paling sesuai untuk Anda. Tingkat kesesuaian antara pekerjaan yang
    kami berikan disesuaikan dengan informasi yang anda berikan pada saat melakukan konsultasi serta
    ketersediaan lowongan pekerjaan yang kami miliki.
    <br>
</div>
@endsection
