@extends('layouts.app')

@section('content')

	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8">
            	<div class="card">
                	<div class="card-header">Contact Details</div>
                	<div class="card-body">
						<form action="/user-info/create" method="POST">
							@csrf
						  	<div class="form-group">
						    	<label for="firstname">Firstname</label>
						    	<input type="text" name="firstname" class="form-control" id="firstname" placeholder="Enter Firstname">
						    	@error('firstname')
								    <small class="form-text text-danger">{{ $message }}.</small>
								@enderror
						  	</div>

						  	<div class="form-group">
						    	<label for="lastname">Lastname</label>
						    	<input type="text" name="lastname" class="form-control" id="lastname" placeholder="Enter Lastname">
						    	@error('lastname')
								    <small class="form-text text-danger">{{ $message }}.</small>
								@enderror
						  	</div>

						  	<div class="form-group">
						    	<label for="email">Email</label>
						    	<input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
						    	@error('email')
								    <small class="form-text text-danger">{{ $message }}.</small>
								@enderror
						  	</div>

						  	<div class="form-group">
						    	<label for="phone">Phone Number</label>
						    	<input type="text" name="phone" class="form-control" id="phone" placeholder="Enter phone number">
						    	@error('phone')
								    <small class="form-text text-danger">{{ $message }}.</small>
								@enderror
						  	</div>

						  	<div class="form-group">
						    	<label for="address">Address</label>
						    	<textarea name="address" id="address" cols="30" rows="5" class="form-control"></textarea>
						    	@error('address')
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