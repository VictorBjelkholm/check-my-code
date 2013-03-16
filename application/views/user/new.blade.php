@layout('master')

@section('content')
		{{ Form::open('register', 'POST', array('class' => 'form-horizontal')) }}
		<div class="control-group">
			{{ Form::label('username', 'Username', array('class' => 'control-label required')) }}
			<div class="controls">
				<div class="input-append">
				{{ Form::text('username') }}
				<button class="btn" type="button">Check</button>
				</div>
			</div>
		</div>
		<div class="control-group">
			<b>{{ Form::label('password', 'Password', array('class' => 'control-label required')) }}</b>
			<div class="controls">
				{{ Form::password('password') }}
			</div>
		</div>
		<div class="control-group">
			{{ Form::label('name', 'Full name', array('class' => 'control-label')) }}
			<div class="controls">
				{{ Form::text('name') }}
			</div>
		</div>
		<div class="control-group">
			{{ Form::label('email', 'Email', array('class' => 'control-label')) }}
			<div class="controls">
				{{ Form::text('email') }}
			</div>
		</div>
		<div class="control-group">
			{{ Form::label('bio', 'Bio', array('class' => 'control-label')) }}
			<div class="controls">
				{{ Form::textarea('bio') }}
			</div>
		</div>
		<div class="control-group">
			<div class="controls">
						<span class="help-block">Only fields marked with * is needed for registration. </span>
			</div>
		</div>
		<div class="form-actions">
					<a href="{{ URL::to_route('login_user') }}" class="btn btn-info">Back to login</a>
				{{ Form::submit('Register', array('class' => 'btn btn-success')) }}
		</div>
	{{ Form::close() }}	
@endsection