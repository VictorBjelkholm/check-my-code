<div class="btn-group">
	<a href="{{ URL::to_route('new_comment') }}/{{ $code->slug }}#comment" class="btn btn-info">Comment</a>
	<a href="#" class="btn btn-success">Fork</a>
	<!-- This should only run if user is owner -->
	@if(!Auth::guest() )
		@if( Auth::user()->id === $code->user->id)
			<a href="#" class="btn btn-warning">Edit</a>
			<a href="#" class="btn btn-danger">Delete</a>
		@endif
	@endif
	
</div>