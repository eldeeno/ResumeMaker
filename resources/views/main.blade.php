@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-xs-12 text-center">
				<h3>Welcome to Resume Builder !</h3>
				<a href="{{ route('user-info.index') }}" class="btn btn-primary">Create Now</a>
			</div>
		</div>
	</div>
@endsection