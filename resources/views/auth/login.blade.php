@extends('templates.default')

@section('title', 'Defining Items')

@section('content')

<h2>login</h2>

<form class="form-horizontal" role="form" method="POST" action="/auth/login">
<input type="hidden" name="_token" value="{{ csrf_token() }}">

<div class="form-group">
<label class="col-md-4 control-label">E-Mail Address</label>
<div class="col-md-6">
<input type="email" class="form-control" name="email" value="{{ old('email') }}">
</div>
</div>

<div class="form-group">
<label class="col-md-4 control-label">Password</label>
<div class="col-md-6">
<input type="password" class="form-control" name="password">
</div>
</div>

</div>
</div>
</div>

<div class="form-group">
	<div class="col-md-6 col-md-offset-4">
	<button type="submit" class="btn btn-primary" style="margin-right: 15px;">
		Login
	</button>

</div>
</div>
</form>
</div>
</div>
</div>

</div>
</div>
              
                <p>@if(Auth::check())

                  Welcome 
                    <nav class="dropdown">
                      <ul>
                        <li><a href="">Sign out</a></li>
                        <li>{!! URL::route('signout', 'Sign out') !!}</li>
                      </ul>
                    </nav>
                  </p>

                <p>@elseif(Auth::guest())

                  Auth::guest

                @else

                  not connected or else

                @endif</p>
@endsection