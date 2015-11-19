@extends('templates.default')

@section('title', 'Defining Items')

@section('content')


<h2>Log In</h2>

<p>Log In into your account</p>

<p>
	<form method="POST" action="/auth/login">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">

		<p><input name="name" placeholder="Name"></p>
		<p><input name="email" type="email" placeholder="Email"></p>
		<p><input name="password" type="password" placeholder="Password"></p>
		
		<button type="submit">Register</button>

	</form>
</p>

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