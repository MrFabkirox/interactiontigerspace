
@layout('layouts.default')

@section('content')

	@if(isset( $name ))
			{{ $name }}<br />
		@else
			No name given
		@endif

		{{ $age }}<br />
		
		{{ $location }}<br />
		{{ $specialty }}<br />


@endsection