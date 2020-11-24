@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="card">
					<div class="card-header">Skill Sets</div>
					<div class="card-body">
						<a class="btn btn-info mb-3" href="{{ route('skill.create') }}">Add Skill Set</a>
						<a class="btn btn-info float-right" href="{{ route('user-info.index') }}">Done</a>
						<div class="row">
							@foreach($skills as $skill)
							<div class="col-sm-4 mb-3">
								<div class="card">
									<div class="card-body">
										<h5 class="card-title"><strong>{{ $skill->name }}</strong></h5>
										<p class="card-text mb-0">
											Rating: <small>{{ $skill->rating }}/10</small>
										</p>
										<div class="progress">
										  	<div class="progress-bar progress-bar-striped
										  		@if($skill->rating <= 3)
										  			bg-danger
										  		@elseif($skill->rating > 3 && $skill->rating <= 6)
										  			bg-primary
										  		@elseif($skill->rating >= 7)
										  			bg-success
										  		@endif

										  		progress-bar-animated" role="progressbar" aria-valuenow="{{ $skill->rating }}" aria-valuemin="0" aria-valuemax="10" style="width: {{ $skill->rating }}0%"></div>
										</div>
										<br>
										<a href="{{ route('skill.edit', $skill) }}" class="btn btn-sm btn-primary">Edit</a>
										<form action="{{ route('skill.destroy', $skill) }}" method="POST" style="display: inline;">
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