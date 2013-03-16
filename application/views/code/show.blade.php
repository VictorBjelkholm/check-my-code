@layout('master')

@section('content')
	<h2>{{ $code->title }}</h2>
	@include('code.controls')
	<p>Syntax: {{ $code->syntax}} </p>
	<p><pre class="prettyprint linenums"><code class="language-{{ $code->syntax }}">{{ $code->content }}</code></pre></p>
	<p>Created at {{ $code->created_at}} by <a href="{{ URL::to_route('show_user', $code->users->username) }}">{{ $code->users->name }}</a></p>
	@foreach($code->comments as $comment)
		<div class="comment">
		<h4>{{ $comment->created_at }}</h4>
		<p>{{ $comment->body }}<p>
		<p>{{ $comment->users->name }}</p>
		</div>
	@endforeach
	@include('code.controls')
@endsection