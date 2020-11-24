@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="card">
					<div class="card-header">Education Histories</div>
					<div class="card-body">

						<a class="btn btn-info mb-3" href="{{ route('education.create') }}">Add Qualification</a>
						<a class="btn btn-info float-right" href="{{ route('experience.index') }}">Work Experience</a>
						<div class="row">
							@foreach($educations as $education)
							<div class="col-sm-6 mb-3">
								<div class="card">
									<div class="card-body">
										<h5 class="card-title"><strong>{{ $education->school_name }}: </strong>{{ $education->qualification }} ({{ $education->field }}).</h5>
										<p class="card-text mb-0">
											<strong>From:</strong> {{ date('d-m-Y', strtotime($education->started_at)) }} <strong>To</strong> {{ date('d-m-Y', strtotime($education->graduated_at)) }}
											<a href="{{ route('education.show', $education) }}" class="card-link">...</a>
										</p>
										 <br>
										<a href="{{ route('education.edit', $education) }}" class="btn btn-sm btn-primary">Edit</a>
										{{-- <a href="" class="card-link">Remove</a> --}}
											<form action="{{ route('education.destroy', $education) }}" method="POST" style="display: inline;">
												@csrf
												@method('DELETE')
												<input type="submit" value="Remove" class="btn btn-sm btn-danger">
											</form>
									</div>
								</div>
							</div>
							@endforeach
						</div>
					</div>
				</div>
			</div>
		</div>			
	</div>
@endsection