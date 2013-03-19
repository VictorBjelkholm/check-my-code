@layout('master')

@section('content')
	<h2>Latest codes</h2>
	<p>This is a list of all the latest codes</p>
	@foreach($codes as $code)
		<div class="code span12">
			@if(strlen($code->content ) > 203)
				<?php $code->content = substr($code->content,0,197).'...'; ?>
			@endif
			@include('templates.code')
		</div>
	@endforeach
@endsection