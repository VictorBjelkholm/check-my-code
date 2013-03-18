<div class="comment">
	<!-- TODO: Add nicer styling to comments -->
	<div class="span9">
		<p>{{ $comment->body }}</p>
	</div>
	<div class="span2">
		<p><a href="">#{{ $comment->id }}</a>
		<p><a href="{{ URL::to_route('show_user', $comment->user->username) }}">{{ ($comment->user->name === '') ? $comment->user->username : $comment->user->name }}</a></p>
		<p>{{ $comment->created_at }}</p>
	</div>
	<div class="clear"></div>
</div>