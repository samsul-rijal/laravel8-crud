@extends('layouts.main')

@include('partials.navbar')

@section('content')
	<div class="col-md-12 mt-5">
		<div class="card">
			<div class="card-header">
				<h3>Dashboard</h3>
			</div>
			<div class="card-body">
				<h5>Selamat datang di halaman dahboard, <strong>{{ Auth::user()->name }}</strong></h5>
			</div>
		</div>
	</div>
@endsection
