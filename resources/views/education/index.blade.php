@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="card">
					<div class="card-header">Education Histories</div>
					<div class="card-body">
						<div class="row">
							@foreach($educations as $education)
							<div class="col-sm-6 mb-3">
								<div class="card">
									<div class="card-body">
										<h5 class="card-title"><strong>{{ $education->school_name }}:</strong>{{ $education->qualification }} ({{ $education->field }}).</h5>
										<p class="card-text mb-0">
											from: {{ $education->started_at }} - {{ $education->graduated_at }}
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
						<a class="btn btn-info" href="{{ route('education.create') }}">Add Qualification</a>
					</div>
				</div>
			</div>
		</div>			
	</div>
@endsection