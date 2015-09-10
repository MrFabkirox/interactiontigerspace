<!DOCTYPE html>
<html> 
<head> 

	<meta http-equiv="content-type" content="text/html; charset=utf8" />
	<title>Interaction Tiger Space, page2</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <link rel="stylesheet" type="text/css" href="/css/main.css">

<script>	
</script>

</head>
<body>

<div id="right"> @include('menu') </div>
	
<div id="left">

	@if ($errors)
	<ul>
		@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>
@endif

<h2>page 2</h2>

<form method="POST">
	<input name="name" type="text" placeholder="name" />
	<input name="city" type="text" placeholder="city" />
	<input type="hidden" name="_token" value="{{ csrf_token() }}" />
	<input type="submit" value="say it" />
</form>

</div>

</body>
</html>