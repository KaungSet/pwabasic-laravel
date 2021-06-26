@extends('layouts.app')
@section('content')

	<div class="container">

		@if ($errors->any())
			<div class="alert alert-warning">
				<ol>
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ol>
			</div>
		@endif

		<form method="POST">
			@csrf
			<div class="form-group">
				<label>name</label>
				<input type="text" name="name" class="form-control" value="{{ $editarticle['name'] }}">
				
			</div>
			<div class="form-group">
				<label>email</label>
				<input name="email" class="form-control" value="{{ $editarticle['email'] }}">
			</div>


			<div class="form-group">
				<label>address</label>
				<input name="address" class="form-control" value="{{ $editarticle['address'] }}">
			</div>

			<input type="submit" value="Edit Student" class="btn btn-primary">
			<a class="btn btn-primary" href="{{ url("/studentlist") }}">
					Go Back &raquo;
			</a>
		</form>
	</div>

	@endsection
