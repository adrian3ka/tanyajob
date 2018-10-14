@extends('layouts.app')

@section('css')
	<link href="{{  asset('css/home.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('content')
<div class="wrapper">
	<div id="dashboard">
		
		<div class="row title">
			<div class="col-sm-4">EDIT PROFIL DIRI</div>
				<button class="btnEdit">Edit<img class ="edit-icon" src="{{  asset('img/home/edit.png') }}" width="30px"></button>
			</a>
		</div>
		<hr>
		<form action=" {{ url('users/' . Auth::user()->id ) }}" method="POST">
			{{ csrf_field() }}
            {{ method_field('PUT')}}
			<div class="row">
				<div class="col-sm-4">Tanggal Lahir</div>
				<div class="col-sm-8"><input type="date" name="date_of_birth" value="{{Auth::user()->date_of_birth->format('Y-m-d')}}"></div>
			</div>
			<input type="submit">
		</form>
		
		<div class="row user-info">
			<div class="col-sm-4">Pendidikan Terakhir</div>
			<div class="col-sm-8">S1</div>
		</div>
		<div class="row user-info">
			<div class="col-sm-4">Jurusan</div>
			<div class="col-sm-8">Computer Science</div>
		</div>
		<div class="row user-info">
			<div class="col-sm-4">Kemampuan</div>
			<div class="col-sm-8">
				<span class="label label-primary">PHP</span>
				<span class="label label-primary">Javascript</span>
				<span class="label label-primary">MySQL</span>
				<span class="label label-primary">COBOL</span>
			</div>
		</div>
		<div class="row user-info">
			<div class="col-sm-4">Bersedia Ditempatkan</div>
			<div class="col-sm-8">DKI-Jakarta</div>
		</div>
		<div class="row user-info">
			<div class="col-sm-4">Ekspetasi Gaji</div>
			<div class="col-sm-8">Rp 15.000.000,- hingga Rp 25.000.000,-</div>
		</div>
		<div class="row user-info">
			<div class="col-sm-4">Fasilitas Yang Diharapkan</div>
			<div class="col-sm-8">
				<span class="label label-success">Makan Siang</span>
				<span class="label label-success">Makan Malam</span>
				<span class="label label-success">Gaji Net</span>
				<span class="label label-success">Asuransi Kesehatan</span>
			</div>
		</div>
	</div>
</div>
@endsection

@section('script')
@endsection
