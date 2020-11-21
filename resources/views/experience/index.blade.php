@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="card">
					<div class="card-header">Work Experience</div>
					<div class="card-body">
						<div class="row">
							@foreach($experiences as $experience)
							<div class="col-sm-6 mb-3">
								<div class="card">
									<div class="card-body">
										<h5 class="card-title"><strong>{{ $experience->job_title }}:</strong>{{ $experience->employer }} ({{ $experience->city }}, {{ $experience->state }}).</h5>
										<p class="card-text mb-0">
											from: {{ $experience->start_date }} - {{ $experience->end_date }}
											<a href="{{ route('experience.show', $experience) }}" class="card-link">...</a>
										</p>
										 <br>
										<a href="{{ route('experience.edit', $experience) }}" class="btn btn-sm btn-primary">Edit</a>
										{{-- <a href="" class="card-link">Remove</a> --}}
											<form action="{{ route('experience.destroy', $experience) }}" method="POST" style="display: inline;">
												@csrf
												@method('DELETE')
												<input type="submit" value="Remove" class="btn btn-sm btn-danger">
											</form>
									</div>
								</div>
							</div>
							@endforeach
						</div>
						<a class="btn btn-info" href="{{ route('experience.create') }}">Add Work Experience</a>
					</div>
				</div>
			</div>
		</div>			
	</div>
@endsection