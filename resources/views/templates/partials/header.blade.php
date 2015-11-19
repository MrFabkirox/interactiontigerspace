<!DOCTYPE html>
<html lang="en"> 
<head> 

	<meta http-equiv="content-type" content="text/html; charset=utf8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/png" href="img/favicontiger1.png">
	<title>Interaction Tiger Space, @yield('title')</title>

    <link rel="stylesheet" type="text/css" href="/css/main.css">

    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!--<link rel="stylesheet" type="text/css" href="/css/style.css"> -->

<script>	
</script>

</head>
<body>


    <nav class="navbar navbar-fixed-top navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Interaction Tiger Space</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
          
          @if(Auth::check())

              <form method="get" action="/auth/logout" class="navbar-form navbar-right">
                <span style="color: #9D9D9D;">Logged as {!! Auth::user()->name !!} <span style="color:rgba(255,0,0,0.5)";>' ;..; '</span></span>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <button name="logout" type="submit">Log out</button>
              </form>
                  
          @elseif(Auth::guest())

            <form method="get" action="auth/register" class="navbar-form navbar-right">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <button type="submit">Register</button>
            </form>

            <form method="post" action="/auth/login" class="navbar-form navbar-right">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <div class="form-group">
                <input name="email" type="text" placeholder="Email" class="form-control">
              </div>
              <div class="form-group">
                <input name="password" type="password" placeholder="Password" class="form-control" style="width: 8em;">
              </div>
              <button type="submit">Sign in</button>
            </form>

            @else

              Not connected or else

            @endif


        </div><!-- /.nav-collapse -->
      </div><!-- /.container -->
    </nav><!-- /.navbar -->

	<h3>Interaction Tiger Space</h3>

<div> @include('../../menu') </div>