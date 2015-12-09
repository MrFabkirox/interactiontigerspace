@extends('templates.default')

@section('title', 'Defining Items')

@section('content')

<div class="container">

      <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-9">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
          </p>
          <div class="jumbotron">
            <h1>Loggin in</h1>
            <p></p>
            </div>
          <div class="row">
           
            <div class="col-xs-6 col-lg-4">
              
              <p style='font-weight: bold'>...</p>
                          
              
<h2>Log In</h2>

<p>Log In into your account</p>

<p>
  <form method="POST" action="/auth/login">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <p><input name="email" type="email" placeholder="Email"></p>
    <p><input name="password" type="password" placeholder="Password"></p>
    
    <button type="submit">login</button>

  </form>
</p>

            </div><!--/.col-xs-6.col-lg-4-->
           
            <div class="col-xs-6 col-lg-4">

            <h3>Connection</h3>
            
            <p>

            @if(Auth::check())

              You are here as an authicate user.
              <nav class="dropdown">
                <ul>
                  <li><a href="">Sign out</a></li>
                  <li>{!! URL::route('signout', 'Sign out') !!}</li>
                </ul>
              </nav>
            
              @elseif(Auth::guest())
                You are here as a guest for now, feel free to register or to login!
              @else
                not connected or else
              @endif
            </p>
            </div><!--/.col-xs-6.col-lg-4-->
            
            <div class="col-xs-6 col-lg-4">
            
            <h3>User Message</h3>

            <p>
              @if(isset($messUser ))
                Message user : {{ $name }}
              @else
                No user message for now.
              @endif
            </p>

            </div><!--/.col-xs-6.col-lg-4-->

            <div class="col-xs-6 col-lg-4">
            
            <h3>Errors</h3>
                      
              @if($errors)
                If there is.
                <ul>
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
                </ul>
              @else
                No error to display
              @endif

            </div><!--/.col-xs-6.col-lg-4-->

          </div><!--/row-->
        </div><!--/.col-xs-12.col-sm-9-->


@endsection