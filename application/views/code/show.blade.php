@layout('master')

@section('content')
	<h2>{{ $code->title }}</h2>
	@include('code.controls')
	<p>Syntax: {{ $code->syntax}} </p>
	<p><pre class="prettyprint linenums"><code class="language-{{ $code->syntax }}">{{ $code->content }}</code></pre></p>
	<p>Created at {{ $code->created_at}} by <a href="{{ URL::to_route('show_user', $code->users->username) }}">{{ $code->users->name }}</a></p>
	@foreach($comments as $comment)
		<div class="comment">
		<p><a href="">#{{ $comment->id }}</a></p>
		<p>{{ $comment->body }}</p>
		<p>{{ User::find($comment->author_id)->first()->username }} | {{ $comment->created_at }} </p>
		</div>
	@endforeach
	@include('code.controls')
@endsection