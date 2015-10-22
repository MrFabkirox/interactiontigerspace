@include('templates.partials.header')

	<div>

		@if(Session::has('message'))
			<p>{{ Session::get('message') }}</p>
		@endif
		
		@yield('content')

	</div>
	
@include('templates.partials.footer')