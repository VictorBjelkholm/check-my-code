@layout('master')

@section('content')
	<h2>Latest codes</h2>
	<p>This is a list of all the latest codes</p>
	@foreach($codes as $code)
		<div class="code span12">
			<h3><a href="{{ URL::to_route('show_code', $code->slug) }}">{{ $code->title }}</a> - {{ $code->syntax}}</h3>
			<?php
				$codeContent = (strlen($code->content ) > 203) ? substr($code->content,0,198).'<br/>...' : $code->content;
			?>
			<p>Created at: {{ $code->created_at }} by <a href="{{ URL::to_route('show_user', 'asd') }}"> asd </a> </p>
			@include('code.controls')
			<p><pre class="prettyprint linenums">{{ $codeContent }}</pre></p>
		</div>
	@endforeach
@endsection