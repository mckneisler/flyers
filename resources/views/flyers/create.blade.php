@extends('layout')

@section('content')
	<h1>Selling Your Home?</h1>

	<hr />

<div class="row">
	<form method="POST" action="/flyers" enctype="nultipart/form-data" class="col-md-6">
		@include('flyers.form')

		@if (count($errors))
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		@endif
	</form>
</div>
@endsection
