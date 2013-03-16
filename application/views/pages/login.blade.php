@layout('master')

@section('content')
	@if(isset($message))
		{{ $message }}
	@endif
	{{ Form::open('login', 'POST', array('class' => 'form-horizontal')) }}
		<div class="control-group">
			{{ Form::label('username', 'Username', array('class' => 'control-label')) }}
			<div class="controls">
				{{ Form::text('username') }}
			</div>
		</div>
		<div class="control-group">
			{{ Form::label('password', 'Password', array('class' => 'control-label')) }}
			<div class="controls">
				{{ Form::password('password') }}
			</div>
		</div>
		<div class="form-actions">
				<a href="{{ URL::to_route('register_user', 'Register') }}" class="btn btn-success">Register</a>
				{{ Form::submit('Login', array('class' => 'btn btn-primary')) }}
		</div>
	{{ Form::close() }}	
@endsection
