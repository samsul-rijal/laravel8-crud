@extends('layouts.main')

@include('partials.navbar')

@section('content')
	<div class="row mt-5 mb-5">
		<div class="col-lg-12 margin-tb">
			<div class="float-left">
				<h2>Show Todo</h2>
			</div>
			<div class="float-right">
				<a class="btn btn-secondary" href="{{ route('todos.index') }}">Back</a>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="form-group">
				<strong>Task:</strong>
				{{ $todo->task }}
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="form-group">
				<strong>Description:</strong>
				{{ $todo->description }}
			</div>
		</div>
	</div>
@endsection