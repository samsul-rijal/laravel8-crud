@extends('layouts.main')

@include('partials.navbar')

@section('content')
	<div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>List Todo</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-success" href="{{ route('todos.create') }}">Create Todo</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
    <div class="alert alert-success">
    	<p>{{ $message }}</p>
    </div>
    @endif

    <div class="container">
	  	<div class="row">
	    	@foreach ($todos as $todo)
		    <div class="col-xs-12 col-md-4">
		      	<div class="card mb-5" style="width: 18rem;">
					<div class="card-body">
						<h5 class="card-title">Task</h5>
						<p>{{ $todo->task }}</p>
						<h5 class="card-title">Description</h5>
					    <p class="card-text">{{ $todo->description }}</p>
					    <h6 class="card-subtitle mb-2 text-muted">{{ $todo->date }}</h6>
					    <td class="text-center">
			                <form action="{{ route('todos.destroy',$todo->id) }}" method="POST">
			  
			                    <a class="btn btn-info btn-sm" href="{{ route('todos.show',$todo->id) }}">Show</a>
			  
			                    <a class="btn btn-primary btn-sm" href="{{ route('todos.edit',$todo->id) }}">Edit</a>
			  
			                    @csrf
			                    @method('DELETE')
			  
			                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
			                </form>
			            </td>
				  	</div>
				</div>
		    </div>
			@endforeach
	  	</div>
	</div>

	{!! $todos->links() !!}

@endsection