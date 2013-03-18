@layout('master')

@section('content')
		@foreach( $codes as $code)
			@include('templates.code')
			@foreach($code->comments as $comment)
				@include('templates.comment')
			@endforeach
		@endforeach
@endsection