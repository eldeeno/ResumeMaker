@extends('layouts.app')

@section('content')

	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8">
            	<div class="card">
                	<div class="card-header">Education Details</div>
                	<div class="card-body">
						<form action="{{ route('education.store') }}" method="POST">
							@csrf
						  	<div class="form-group">
						    	<label for="school_name">School Name</label>
						    	<input type="text" name="school_name" class="form-control" id="school_name" placeholder="Enter school name">
						    	@error('school_name')
								    <small class="form-text text-danger">{{ $message }}.</small>
								@enderror
						  	</div>

						  	<div class="form-group">
						    	<label for="school_location">Lastname</label>
						    	<input type="text" name="school_location" class="form-control" id="school_location" placeholder="Enter school location">
						    	@error('school_location')
								    <small class="form-text text-danger">{{ $message }}.</small>
								@enderror
						  	</div>

						  	<div class="form-group">
						    	<label for="field">Field of Study</label>
						    	<input type="text" name="field" class="form-control" id="field" placeholder="Enter field of study">
						    	@error('field')
								    <small class="form-text text-danger">{{ $message }}.</small>
								@enderror
						  	</div>

						  	<div class="form-group">
						    	<label for="qualification">Qualification</label>
						    	<input type="text" name="qualification" class="form-control" id="qualification" placeholder="Enter qualification">
						    	@error('qualification')
								    <small class="form-text text-danger">{{ $message }}.</small>
								@enderror
						  	</div>

						  	<div class="form-group">
						    	<label for="started_at">Start Date</label>
						    	<input type="date" name="started_at" class="form-control" id="started_at" placeholder="Select start date">
						    	@error('started_at')
								    <small class="form-text text-danger">{{ $message }}.</small>
								@enderror
						  	</div>

						  	<div class="form-group">
						    	<label for="graduated_at">Graduation Date</label>
						    	<input type="date" name="graduated_at" class="form-control" id="graduated_at" placeholder="Select graduation date">
						    	@error('graduated_at')
								    <small class="form-text text-danger">{{ $message }}.</small>
								@enderror
						  	</div>
						  	<button type="submit" class="btn btn-primary">Submit</button>
						  	<a href="{{ url('/') }}" class="btn btn-warning">Cancel</a>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection