<!DOCTYPE html>
<html> 
<head> 

	<meta http-equiv="content-type" content="text/html; charset=utf8" />
	<title>Interaction Tiger Space, page3</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <link rel="stylesheet" type="text/css" href="/css/main.css">

<script>	
</script>

</head>
<body>

	<div id="right"> @include('menu') </div>
	
<div id="left">

<h2>page3</h2>

	<div class="content">
		this is a layout blade php

		@if(Session::has('message'))
			<p id="message">{{ Session::get('message') }} </p>
		@endif

		@yield('content')

		{{ date('Y') }}
	</div>

</div>

</body>
</html>