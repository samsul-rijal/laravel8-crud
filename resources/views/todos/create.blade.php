@extends('layouts.main')

@include('partials.navbar')

@section('content')
<div class="row mt-5 mb-5">
	<div class="col-lg-12 margin-tb">
		<div class="float-left">
			<h2>Create New Todo</h2>
		</div>
		<div class="float-right">
			<a class="btn btn-secondary" href="{{ route('todos.index') }}">Back</a>
		</div>
	</div>
</div>

@if ($errors->any())
	<div class="alert alert-danger">
		<strong>Whoops!</strong>There were some problems with your input.<br><br>
        <ul>
        	@foreach ($errors->all() as $error)
        		<li>{{ $error }}</li>
        	@endforeach	
        </ul>
	</div>
@endif

<form action="{{ route('todos.store') }}" method="POST">
	@csrf

	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="form-group">
				<strong>Task:</strong>
				<input type="text" name="task" class="form-control" placeholder="Task">
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="form-group">
				<strong>Description:</strong>
				<textarea class="form-control" style="height: 150px" name="description" placeholder="Description"></textarea>
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="form-group">
				<strong>Date:</strong>
				<input type="date" name="date" class="form-control">
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-12 text-center">
			<button type="submit" class="btn btn-primary">Submit</button>
		</div>
	</div>
	
</form>
@endsection