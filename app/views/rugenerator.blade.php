@extends('_master_P3')

@section('title')
    Random User 
@stop


@section('content')
    <h1>This is the Random User Generator page</h1>
	<form method="post">
			<div id='user-form'>		 
				<label for='number_of_users'># of Users</label><br>
				<input type="text" name="number_of_users" value="5" id="number_of_users" maxlength="2"><br>
				<div id="users-error"></div>
				<input type="checkbox" name="include_dob" value="include_dob">Include date of birth<br>  
				<input type="checkbox" name="include_bio" value="include_bio">Include biography<br> 
            </div>
		
			<input type='submit' class='btn btn-default' value='Generate Users'>
            					
	</form>
        <p class='results'>Sample</p>
@stop