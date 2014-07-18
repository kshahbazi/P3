@extends('_master_P3')

@section('title')
    Lorem Ipsum Generator
@stop


@section('content')
    <h1>Lorem Ipsum Generator</h1>
	<form action="/ligenerator" method="POST">
			<div id='lorem-form'>		 
				<label for='number_of_wp'>Generate words or paragraphs?</label><br>
				<input type="text" name="number_of_wp" value="5" id="number_of_wp" maxlength="2"><br>
				<div id="number_error"></div>
				
				<input type="radio" name="words_or_paragraphs" value="Words"> Words<br>
                <input type="radio" name="words_or_paragraphs" value="Paragraphs"> Paragraphs<br>
				<div id="radio_error"></div>
				
            </div>
		
			<input type='submit' class='btn btn-default' value='Generate Text'>
            					
	</form>
	@if (isset($results))
        <div class='results'>
			{{ $results }}
		</div>
	@endif
@stop