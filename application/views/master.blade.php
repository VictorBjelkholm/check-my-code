<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta http-equiv="x-ua-compatible" content="ie=edge, chrome=1" />
<title>Check my code</title>
{{ HTML::style('css/vendors/bootstrap.css') }}
{{ HTML::style('css/vendors/bootstrap-responsive.css') }}
{{ HTML::style('css/vendors/prettify.css') }}
{{ HTML::style('css/style.css') }}
@yield('extraHead')
</head>
<body>
	<div id="wrapper">
		<div id="header">
			@render('templates.header')
		</div> <!-- End #header -->
		<div id="content" class="span12">
			@yield('content')
		</div> <!-- End #content -->
		<div id="footer" class="span12">
			@render('templates.footer')
		</div> <!-- End #footer -->
		<div class="clear"></div>
	</div> <!-- End #wrapper --> 
	<div id="scroller"></div>
	{{ HTML::script('js/vendors/jquery.js') }}
	{{ HTML::script('js/vendors/bootstrap.js') }}
	{{ HTML::script('js/vendors/prettify/prettify.js') }}
	<script>
		prettyPrint();
	</script>
</body> <!-- End body -->
</html>