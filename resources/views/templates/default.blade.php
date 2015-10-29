@include('templates.partials.header')

	<div>
		
		@yield('content')

		{{--
		@if(Session::has('message'))
			<p>{{ Session::get('message') }}</p>
		@endif
		--}}
	</div>
	
@include('templates.partials.footer')