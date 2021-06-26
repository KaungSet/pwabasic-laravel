@extends("layouts.app")

@section("content")
	<div class="container">
		<div c"card mb-2">
			<div class="card-body">
				<h5 class="car-title">{{ $article->name }}</h5>
				<p class="card-text">{{ $article->email }}</p>
				<p class="card-text">{{ $article->address }}</p>
				<a class="btn btn-warning" href="{{ url("/student/edit/$article->id") }}">Edit
				</a>
				<a class="btn btn-warning" href="{{ url("/student/delete/$article->id") }}">Delete
				</a>
			</div>			
		</div>

		
	</div>
@endsection