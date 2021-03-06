@extends('_master_P3')

@section('title')
    Random User Generator
@stop


@section('content')
    <h1>Random User Generator</h1>
	<form action="/rugenerator" method="POST">
			<div id='user-form'>		 
				<label for='number_of_users'># of Users</label><br>
				<input type="text" name="number_of_users" value="5" id="number_of_users" maxlength="2"><br>
				<div id="users-error"></div>
				<input type="checkbox" name="include_dob" value="include_dob">Include date of birth<br>  
				<input type="checkbox" name="include_bio" value="include_bio">Include biography<br> 
            </div>
		
			<input type='submit' class='btn btn-default' value='Generate Users'><hr>
            					
	</form>
	@if(isset($results))
        <div class='result'>
			{{ $results }}
		</div>
	@endif
@stop