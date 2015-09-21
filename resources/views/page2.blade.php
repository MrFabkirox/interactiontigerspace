@extends('templates.default')

@section('content')


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


@stop