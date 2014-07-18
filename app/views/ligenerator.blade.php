@extends('_master_P3')

@section('title')
    Lorem Ipsum Generator
@stop


@section('content')
    <h1>Lorem Ipsum Generator</h1>
	<form action="/ligenerator" method="POST" onSubmit="return formValidate()">
			<div id='lorem-form'>		 
				<label for='number_of_wp'>Generate how many paragraphs?</label><br>
				<input type="text" name="number_of_wp" value="5" id="number_of_wp" maxlength="2"><br>
				<div id="number_error"></div>
				
				<input type="radio" name="words_or_paragraphs" value="Words"> Words<br> 
                <input type="radio" name="words_or_paragraphs" value="Paragraphs"> Paragraphs<br> 
				<div id="error">
				</div>
				
            </div>
		
			<input type='submit' class='btn btn-default' value='Generate Text'><hr>
            					
	</form>
	@if (isset($results))
        <div class='results'>
			{{ $results }}
		</div>
	@endif
@stop

@section('script')
<script type="text/javascript">
/*
Need to validate that either of 
the 'words_or_paragraphs' radio
buttons have been selected

function formValidate(){
	var radio_buttons = document.getElementsByName('words_or_paragraphs')
	
	
	//since the buttons are an array, loop
    for (var i = 0; i < radio_buttons.length; i++) {
	    if (radio_buttons[i].checked) 
		{
        	//success, proceed
			return true;
    	}
		else
		{
			alert("not checked");
			
			//if no radio button selected, show error
		    document.getElementById('error').setAttribute("style", "color: red;");
		    //and clear any password generated previously
			document.getElementById('results').innerHTML = '';
		    //failed, remain on this page until form is satisfactorily completed
			return false;
		}
    };

    
}
*/
</script>
@stop