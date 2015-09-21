@extends('templates.default')

@section('content')


	<h2 style="color: #FFAA88;">welcome to page 1 !</h2>

	@if(isset( $name ))
		{{ $name }}<br />
	@else
		No name given
	@endif

	{{ $age }}<br />
	
	<?php echo $location; ?><br />
	<?php echo $specialty; ?><br />


@stop