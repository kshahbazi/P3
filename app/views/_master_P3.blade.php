<!doctype html>
<html lang="en">
<head>

    <title>
	@yield('title')
	</title>

    <meta charset='utf-8'>
    <link href='{{ asset('P3.css') }}' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Smokum' rel='stylesheet' type='text/css'>

</head>

<body>
	<div id="container">  
	   		<div id="heading"><a href='/'>p3 - developers' best friend</a></div>
	   		<div id="mainContent">
				@yield('content')
		  	</div>

	</div>
</body>
</html>
