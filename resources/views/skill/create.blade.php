@extends('layouts.app')

@section('content')

	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8">
            	<div class="card">
                	<div class="card-header">Skill Set</div>
                	<div class="card-body">
						<form action="{{ route('skill.store') }}" method="POST">
							@csrf
						  	<div class="form-group">
						    	<label for="name">Skill Name</label>
						    	<input type="text" name="name" class="form-control" id="name" placeholder="Enter skill name">
						    	@error('name')
								    <small class="form-text text-danger">{{ $message }}.</small>
								@enderror
						  	</div>

						  	<div class="form-group">
						    	<label for="employer">Rating</label>
						    	<input type="number" name="rating" class="form-control" id="employer" placeholder="Enter skill rating">
								<small class="form-text text-info">On The Scale of 10.</small>
						    	@error('employer')
								    <small class="form-text text-danger">{{ $message }}.</small>
								@enderror
						  	</div>
						  	<button type="submit" class="btn btn-primary">Submit</button>
						  	<a href="{{ url('/skill') }}" class="btn btn-warning">Cancel</a>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection