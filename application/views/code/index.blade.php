@layout('master')

@section('content')
	<h2>Latest codes</h2>
	<p>This is a list of all the latest codes</p>
	@foreach($codes as $code)
		<div class="code span12">
			<?php
				$code->content = (strlen($code->content ) > 203) ? substr($code->content,0,198).'<br/>...' : $code->content;
			?>
			@include('templates.code')
		</div>
	@endforeach
@endsection