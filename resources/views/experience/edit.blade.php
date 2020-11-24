@extends('layouts.app')

@section('content')

	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8">
            	<div class="card">
                	<div class="card-header">Edit Work Experience</div>
                	<div class="card-body">
						<form action="{{ route('experience.update', $experience) }}" method="POST">
							@csrf
							@method('PUT')
						  	<div class="form-group">
						    	<label for="job_title">Job Title</label>
						    	<input type="text" name="job_title" class="form-control" id="job_title" placeholder="Enter job title" value="{{ $experience->job_title }}">
						    	@error('job_title')
								    <small class="form-text text-danger">{{ $message }}.</small>
								@enderror
						  	</div>

						  	<div class="form-group">
						    	<label for="employer">Employer</label>
						    	<input type="text" name="employer" class="form-control" id="employer" placeholder="Enter employer namne" value="{{ $experience->employer }}">
						    	@error('employer')
								    <small class="form-text text-danger">{{ $message }}.</small>
								@enderror
						  	</div>

						  	<div class="form-group">
						    	<label for="city">City</label>
						    	<input type="text" name="city" class="form-control" id="city" placeholder="Enter city name" value="{{ $experience->city }}">
						    	@error('city')
								    <small class="form-text text-danger">{{ $message }}.</small>
								@enderror
						  	</div>

						  	<div class="form-group">
						    	<label for="state">State</label>
						    	<input type="text" name="state" class="form-control" id="state" placeholder="Enter State" value="{{ $experience->state }}">
						    	@error('state')
								    <small class="form-text text-danger">{{ $message }}.</small>
								@enderror
						  	</div>

						  	<div class="form-group">
						    	<label for="started_at">Start Date</label>
						    	<input type="date" name="start_date" class="form-control" id="start_date" placeholder="Select start date" value="{{ $experience->start_date }}">
						    	@error('start_date')
								    <small class="form-text text-danger">{{ $message }}.</small>
								@enderror
						  	</div>

						  	<div class="form-group">
						    	<label for="end_date">End Date</label>
						    	<input type="date" name="end_date" class="form-control" id="end_date" placeholder="Select end date" value="{{ $experience->end_date }}">
						    	@error('end_date')
								    <small class="form-text text-danger">{{ $message }}.</small>
								@enderror
						  	</div>
						  	<button type="submit" class="btn btn-primary">Submit</button>
						  	<a href="{{ url('/experience') }}" class="btn btn-warning">Cancel</a>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection