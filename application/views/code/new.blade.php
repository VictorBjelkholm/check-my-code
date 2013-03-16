@layout('master')

<?php
$languages = array(
	"bsh" => "Bash",
	"c" => "c",
	"cc" => "cc",
	"c++" => "cpp",
	"cs" => "cs",
	"csh" => "csh",
	"cyc" => "cyc",
	"cv" => "cv",
	"htm" => "HTM",
	"html" => "HTML",
	"java" => "Java",
	"js" => "JavaScript",
	"m" => "m",
	"mxml" => "mxml",
	"perl" => "Perl",
	"php" => "PHP",
	"pl" => "pl",
	"pm" => "pm",
	"py" => "Python",
	"rb" => "Ruby",
	"sh" => "Shell",
	"xhtml" => "XHTML",
	"xml" => "XML",
	"xsl" => "XSL");
?>

@section('content')
	<h2>New code</h2>
	{{ Form::open('code') }}
		{{ Form::label('title', 'Your title') }}
		{{ Form::text('title') }}
		{{ Form::label('syntax', 'Syntax') }}
		{{ Form::select('syntax', $languages) }}
		{{ Form::label('content', 'Your code') }}
		{{ Form::textarea('content') }}<br/>
		{{ Form::submit('submit', array('class' => 'btn btn-success')) }}
	{{ Form::close() }}
@endsection
