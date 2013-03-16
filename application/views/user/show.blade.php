@layout('master')

@section('content')
	<h2>{{ $user->name }}</h2>
	<p><strong>Username:</strong> {{ $user->username }}</p>
	<p><strong>Email:</strong> {{ $user->email }}</p>
	<p><strong>Bio:</strong> {{ $user->bio }}</p>
	<p><strong>Created:</strong> {{ $user->created_at }}</p>
	<p><strong>Last updated:</strong> {{ $user->updated_at }}</p>
	@foreach($user->codes as $code)
		<h3><a href="{{ URL::to_route('show_code', $code->id) }}">{{ $code->title }}</a><span style="color: grey;"> - {{ $code->syntax }}</span></h3>
		@render('code.controls')
		<pre class="prettyprint linenums"><code class="language-{{ $code->syntax }}">{{ $code->content }}</code></pre>
	@endforeach
@endsection
