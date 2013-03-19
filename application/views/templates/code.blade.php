<div class="code">
	<h1><a href="{{ URL::to_route('show_code', $code->slug) }}">{{ $code->title }}</a></h1>
	<p>Created by {{ $code->user->username }} at {{ $code->created_at }} as {{ $code->syntax }}</p>
	<p>@include('templates.controls')</p>
	<p><pre class="prettyprint linenums"><code class="language-{{ $code->syntax }}">{{ e($code->content) }}</code></pre>
</div>