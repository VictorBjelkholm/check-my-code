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
		<div class="control-group">
			<div class="controls">
				{{ Form::submit('Login', array('class' => 'btn btn-primary')) }}
			</div>
		</div>
	{{ Form::close() }}	
@endsection
