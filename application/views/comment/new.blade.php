@layout('master')

@section('content')
	<h2>New Comment</h2>
	<h3>{{ $code->title }}</h3>
	<p>
		<pre class="prettyprint linenums"><code class="language-{{ $code->syntax }}">{{ $code->content }}</code></pre>
	</p>
	{{ Form::open('/comment', 'POST') }}
		</p>
		{{ Form::label('comment', 'Your comment') }}
		{{ Form::textarea('comment') }}
		{{ Form::hidden('code_id', $code->id) }}
		</p>
		{{ Form::submit('Send', array('class' => 'btn')) }}
	{{ Form::close() }}	
@endsection
