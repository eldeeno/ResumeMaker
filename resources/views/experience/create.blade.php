@extends('layouts.app')

@section('content')

	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8">
            	<div class="card">
                	<div class="card-header">Work Experience</div>
                	<div class="card-body">
						<form action="{{ route('experience.store') }}" method="POST">
							@csrf
						  	<div class="form-group">
						    	<label for="job_title">Job Title</label>
						    	<input type="text" name="job_title" class="form-control" id="job_title" placeholder="Enter job title">
						    	@error('job_title')
								    <small class="form-text text-danger">{{ $message }}.</small>
								@enderror
						  	</div>

						  	<div class="form-group">
						    	<label for="employer">Employer</label>
						    	<input type="text" name="employer" class="form-control" id="employer" placeholder="Enter employer namne">
						    	@error('employer')
								    <small class="form-text text-danger">{{ $message }}.</small>
								@enderror
						  	</div>

						  	<div class="form-group">
						    	<label for="city">City</label>
						    	<input type="text" name="city" class="form-control" id="city" placeholder="Enter city name">
						    	@error('city')
								    <small class="form-text text-danger">{{ $message }}.</small>
								@enderror
						  	</div>

						  	<div class="form-group">
						    	<label for="state">State</label>
						    	<input type="text" name="state" class="form-control" id="state" placeholder="Enter State">
						    	@error('state')
								    <small class="form-text text-danger">{{ $message }}.</small>
								@enderror
						  	</div>

						  	<div class="form-group">
						    	<label for="started_at">Start Date</label>
						    	<input type="date" name="start_date" class="form-control" id="start_date" placeholder="Select start date">
						    	@error('start_date')
								    <small class="form-text text-danger">{{ $message }}.</small>
								@enderror
						  	</div>

						  	<div class="form-group">
						    	<label for="end_date">End Date</label>
						    	<input type="date" name="end_date" class="form-control" id="end_date" placeholder="Select end date">
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