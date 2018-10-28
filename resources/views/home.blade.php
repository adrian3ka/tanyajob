@extends('layouts.app')

@section('css')
	<link href="{{  asset('css/home.css') }}" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="{{ asset('css/bootstrap-multiselect.css') }}" type="text/css"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
@endsection

@section('content')
<div class ="dashboard">
<div class="row container-fluid h-100">
  <div class="col-sm-3"style="background-color:yellow;">.col-sm-3</div>
  <div class="col-sm-6"style="background-color:pink;">
	  <!--button class="btn">Add<img class ="icon" src="{{  asset('img/home/profile.png') }}" width="200px"></button-->
  <div class="pnlUserInfo">
		<div class="row user-info text-left h-100">
			<div class="classWithPad">Widget 1</div>
			<!--div class="col-sm-6 text-left">Tanggal Lahir</div-->
			<div class="col-sm-6">24 Juli 1997</div>
		</div>
		<div class="row user-info text-left">
			<div class="col-sm-6 text-left">Pendidikan Terakhir</div>
			<div class="col-sm-6">S1</div>
		</div>
		<div class="row user-info text-left">
			<div class="col-sm-6 text-left">Jurusan</div>
			<div class="col-sm-6">Computer Science</div>
		</div>
		<div class="row user-info text-left">
			<div class="col-sm-6 text-left">Kemampuan</div>
			<div class="col-sm-6">
				<span class="label label-primary">PHP</span>
				<span class="label label-primary">Javascript</span>
				<span class="label label-primary">MySQL</span>
				<span class="label label-primary">COBOL</span>
			</div>
		</div>
		<div class="row user-info mt-5 md-2 text-left">
			<div class="col-sm-6 text-left">Bersedia Ditempatkan</div>
			<!--div class="col-sm-6">Widget 2</div-->
			<div class="col-sm-6">DKI-Jakarta</div>
		</div>
		<div class="row user-info text-left">
			<div class="col-sm-6 mr-2 text-left ">Ekspetasi Gaji</div>
			<div class="col-sm-6">Rp 15.000.000,- hingga Rp 25.000.000,-</div>
		</div>
		<div class="row user-info text-left" >
			<div class="col-sm-6 text-left">Fasilitas Yang Diharapkan</div>
			<div class="col-sm-6">
				<span class="label label-success">Makan Siang</span>
				<span class="label label-success">Makan Malam</span>
				<span class="label label-success">Gaji Net</span>
				<span class="label label-success">Asuransi Kesehatan</span>
			</div>
		</div>
  </div>
  </div>
  <div class="col-sm-3"style="background-color:yellow;">.col-sm-3</div>
</div>
</div>

@endsection
