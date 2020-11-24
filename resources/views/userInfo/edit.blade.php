@extends('layouts.app')

@section('content')

	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8">
            	<div class="card">
                	<div class="card-header">Personal Information</div>
                	<div class="card-body">
						<form action="{{ route('user-info.update', $userInfo) }}" method="POST">
							@csrf
							@method('PUT')
						  	<div class="form-group">
						    	<label for="firstname">Firstname</label>
						    	<input type="text" name="firstname" class="form-control" id="firstname" placeholder="Enter Firstname" value="{{ $userInfo->firstname }}">
						    	@error('firstname')
								    <small class="form-text text-danger">{{ $message }}.</small>
								@enderror
						  	</div>

						  	<div class="form-group">
						    	<label for="lastname">Lastname</label>
						    	<input type="text" name="lastname" class="form-control" id="lastname" placeholder="Enter Lastname" value="{{ $userInfo->lastname }}">
						    	@error('lastname')
								    <small class="form-text text-danger">{{ $message }}.</small>
								@enderror
						  	</div>

						  	<div class="form-group">
						    	<label for="email">Email</label>
						    	<input type="email" name="email" class="form-control" id="email" placeholder="Enter email" value="{{ $userInfo->email }}">
						    	@error('email')
								    <small class="form-text text-danger">{{ $message }}.</small>
								@enderror
						  	</div>

						  	<div class="form-group">
						    	<label for="phone">Phone Number</label>
						    	<input type="text" name="phone" class="form-control" id="phone" placeholder="Enter phone number" value="{{ $userInfo->phone }}">
						    	@error('phone')
								    <small class="form-text text-danger">{{ $message }}.</small>
								@enderror
						  	</div>

						  	<div class="form-group">
						    	<label for="address">Address</label>
						    	<textarea name="address" id="address" cols="30" rows="5" class="form-control">{{ $userInfo->address }}</textarea>
						    	@error('address')
								    <small class="form-text text-danger">{{ $message }}.</small>
								@enderror
						  	</div>

						  	<div class="form-group">
						    	<label for="summary">Summary</label>
						    	<textarea name="summary" id="summary" cols="30" rows="5" placeholder="Enter summary about yourself..." class="form-control">{{ $userInfo->summary }}</textarea>
						    	@error('summary')
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