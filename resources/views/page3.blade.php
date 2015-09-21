@extends('templates.default')

@section('content')


<h2>page3</h2>

	<div class="content">
		this is a layout blade php

		@if(Session::has('message'))
			<p id="message">{{ Session::get('message') }} </p>
		@endif

		{{ date('Y') }}
	</div>


@stop