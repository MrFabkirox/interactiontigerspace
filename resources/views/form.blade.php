@if ($errors)
	<ul>
		@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>
@endif

<!--  /var/www/html/laravel3/resources/views -->

<form method="post">
	<label for="name">Name</label>
	<input type="text" name="name" id="name" />
	<input type="hidden" name="_token" value="{{ csrf_token() }}" />
	<input type="submit" />
</form>