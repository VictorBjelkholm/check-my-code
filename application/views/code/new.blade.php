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
if(isset($code)) {
	$codeTitle = 'Fork of ' . $code->title;
	$codeContent = $code->content;
	$codeSyntax = $code->syntax;
	$codeId = $code->id;
} else {
	$codeTitle = '';
	$codeContent = '';
	$codeSyntax = '';
}

?>

@section('content')
	<h2>New code</h2>
	{{ Form::open('code') }}
		{{ Form::label('title', 'Your title') }}
		{{ Form::text('title', $codeTitle) }}
		{{ Form::label('syntax', 'Syntax') }}
		{{ Form::select('syntax', $languages, $codeSyntax) }}
		{{ Form::label('content', 'Your code') }}
		{{ Form::textarea('content', $codeContent) }}
		@if(isset($code))
			{{ Form::hidden('forkOf', $codeId) }}
		@endif
		<br/>
		{{ Form::submit('submit', array('class' => 'btn btn-success')) }}
	{{ Form::close() }}
@endsection
