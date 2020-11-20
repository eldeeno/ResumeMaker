@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="card">
					<div class="card-header">Show Education</div>
					<div class="card-body">
						<div class="row">
							<div class="col-sm-8">
								<div class="card">
									<div class="card-body">
										<h5 class="card-title"><strong>{{ $education->school_name }}:</strong>{{ $education->qualification }} ({{ $education->field }}).</h5>
										<p class="card-text"> from: {{ $education->started_at }} - {{ $education->graduated_at }} </p>
										<a href="{{ route('education.edit', $education->id) }}" class="card-link">Edit</a>
									</div>
								</div>
							</div>
						</div>
						<a class="btn btn-primary" href="{{ route('education.index') }}">Close</a>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection