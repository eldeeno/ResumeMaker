@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="card">
					<div class="card-header">Personal Information</div>
					<div class="card-body">
						<div class="row">
							<div class="col-md-12">
								<a class="btn btn-info mb-3 float-right" href="{{ route('education.index') }}">Education</a>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12 mb-3">
								<div class="card">
									<div class="card-body">
										<div class="card">
											<div class="card-body">
												<h5 class="card-title">{{ $info->summary }}</h5>
											</div>
										</div>
										<h5 class="card-title  pt-3"><strong>Fullname: </strong>{{ $info->firstname }} {{ $info->lastname }}</h5>
										<h5 class="card-title"><strong>Email: </strong>{{ $info->email }}</h5>
										<h5 class="card-title"><strong>Phone: </strong>{{ $info->phone }}</h5>
										<h5 class="card-title"><strong>Address: </strong>{{ $info->address }}</h5>
										<a href="{{ route('user-info.edit', $info) }}" class="btn btn-sm btn-primary">Edit</a>
										<form action="{{ route('user-info.destroy', $info) }}" method="POST" style="display: inline;">
											@csrf
											@method('DELETE')
											<input type="submit" value="Remove" class="btn btn-sm btn-danger">
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>			
	</div>
@endsection