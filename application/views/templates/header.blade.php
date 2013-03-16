<div class="navbar navbar-static-top navbar-inverse">
	<div class="navbar-inner">
		<a href="/" class="brand">Check My Code</a>
		<ul class="nav">
			<li class="{{ URI::is( '/') ? 'active' : '' }}"><a href="/"><i class="icon-home icon-white"></i> Home</a></li>
			<li class="{{ URI::is( 'list') ? 'active' : '' }}"><a href="/code/list"><i class="icon-list icon-white"></i> Latest codes</a></li>
			<li class="{{ URI::is( 'new') ? 'active' : '' }}"><a href="/code/new"><i class="icon-plus icon-white"></i> New code</a></li>
			<li class="{{ URI::is( 'about') ? 'active' : '' }}"><a href="/about"><i class="icon-info-sign icon-white"></i> About</a></li>
		</ul>
		<ul class="nav pull-right">
			@if( Auth::guest() )
			    <li class="{{ URI::is( 'login') ? 'active' : '' }}"><a href="/login"><i class="icon-user icon-white"></i> Login</a></li>
			@else
					<li><a href="/user/{{ Auth::user()->username }}">{{ Auth::user()->username }}</a></li>
			    <li><a href="/logout"><i class="icon-user icon-white"></i> Logout</a></li>
			@endif
		</ul>
	</div>
</div>