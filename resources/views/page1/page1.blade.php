<!DOCTYPE html>
<html> 
<head> 

	<meta http-equiv="content-type" content="text/html; charset=utf8" />
	<title>Interaction Tiger Space, page1</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <link rel="stylesheet" type="text/css" href="/css/main.css">

<script>	
</script>

</head>
<body>


<div id="right"> @include('menu') </div>
	
<div id="left">

	<h2 style="color: #FFAA88;">welcome to page 1 !</h2>

	@if(isset( $name ))
		{{ $name }}<br />
	@else
		No name given
	@endif

	{{ $age }}<br />
	
	<?php echo $location; ?><br />
	<?php echo $specialty; ?><br />

</div>

</body>
</html>