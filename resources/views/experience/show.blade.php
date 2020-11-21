@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="card">
					<div class="card-header">Show Experience</div>
					<div class="card-body">
						<div class="row">
							<div class="col-sm-8">
								<div class="card">
									<div class="card-body">
										<h5 class="card-title"><strong>{{ $experience->job_title }}:</strong>{{ $experience->employer }} ({{ $experience->city }}, {{ $experience->state }}).</h5>
											<h5 class="card-title"><strong>{{ $experience->job_title }}:</strong>{{ $experience->employer }} ({{ $experience->city }}, {{ $experience->state }}).</h5>
											<p class="card-text mb-0">
												from: {{ $experience->start_date }} - {{ $experience->end_date }}
											</p>
										<a href="{{ route('experience.edit', $experience) }}" class="card-link">Edit</a>
									</div>
								</div>
							</div>
						</div>
						<a class="btn btn-primary mt-3" href="{{ route('experience.index') }}">Close</a>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection