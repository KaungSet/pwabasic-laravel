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

			//Cross-site request forgery
			@csrf
			<div class="form-group">
				<label>name</label>
				<input type="text" name="name" class="form-control">
				
			</div>
			<div class="form-group">
				<label>email</label>
				<input name="email" class="form-control">
			</div>


			<div class="form-group">
				<label>address</label>
				<input name="address" class="form-control">
			</div>

						<input type="submit" value="Add Student" class="btn btn-primary">
		</form>
	</div>

	@endsection