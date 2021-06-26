@extends("layouts.app")

@section("content")

<div class="container">


	
	@foreach ($articles as $article)
		<div class="card mb-2">
			<div class="card-body">
				<h5 class="car-title">{{ $article->name }}</h5>
				<p class="card-text">{{ $article->email }}</p>
				<p class="card-text">{{ $article->address }}</p>
				<a class="card-link" href="{{ url("/student/detail/$article->id") }}">
					View Detail &raquo;
				</a>
				
			</div>
		</div>
	@endforeach



</div>

@endsection