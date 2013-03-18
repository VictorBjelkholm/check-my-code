@layout('master')

@section('content')
	<h2>{{ $user->name }}</h2>
	<p><strong>Username:</strong> {{ $user->username }}</p>
	<p><strong>Email:</strong> {{ $user->email }}</p>
	<p><strong>Bio:</strong> {{ $user->bio }}</p>
	<p><strong>Created:</strong> {{ $user->created_at }}</p>
	<p><strong>Last updated:</strong> {{ $user->updated_at }}</p>
	@foreach($codes as $code)	
		@include('templates.code')
	@endforeach
@endsection