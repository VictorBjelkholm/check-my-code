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
	"xsl" => "XSL"
);

?>

@section('content')
	<h2>Edit code</h2>
	{{ Form::open('code', 'PUT') }}
		{{ Form::label('title', 'Your title') }}
		{{ Form::text('title', $code->title) }}
		{{ Form::label('syntax', 'Syntax') }}
		{{ Form::select('syntax', $languages, $code->syntax) }}
		{{ Form::label('content', 'Your code') }}
		{{ Form::textarea('content', $code->content) }}
		{{ Form::hidden('codeId', $code->id) }}
		<br/>
		{{ Form::button('Cancel', array('class' => 'btn btn-info')) }}
		{{ Form::submit('Save', array('class' => 'btn btn-success')) }}
	{{ Form::close() }}
@endsection