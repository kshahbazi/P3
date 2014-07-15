@extends('_master_P3')

@section('title')
    Lorem Ipsum 
@stop


@section('content')
    <h1>This is the Lorem Ipsum</h1>
	<form method="post">
			<div id='lorem-form'>		 
				<label for='number_of_words_or_paragraphs'>Generate words or paragraphs?</label><br>
				<input type="text" name="number_of_words_or_paragraphs" value="5" id="number_of_words_or_paragraphs" maxlength="2"><br>
				<div id="number_error"></div>
				
				<input type="radio" name="words_or_paragraphs" value="Words"> Words<br>
                <input type="radio" name="words_or_paragraphs" value="Paragraphs"> Paragraphs<br>
				<div id="radio_error"></div>
				
            </div>
		
			<input type='submit' class='btn btn-default' value='Generate Text'>
            					
	</form>
        <p class='results'>Sample</p>
@stop