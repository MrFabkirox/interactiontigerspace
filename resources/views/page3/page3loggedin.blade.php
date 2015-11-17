@extends('templates.default')

@section('title', 'blade layout')

@section('content')

<div class="container">

  <div class="row row-offcanvas row-offcanvas-right">

    <div class="col-xs-12 col-sm-9">
      
      <p class="pull-right visible-xs">
        <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
      </p>

      <div class="jumbotron">

        <h1>Defining items, page3loggedin</h1>
        
        <p>Having interrest, passions, are most of the time linked to objects.<br />
        Those objects are linked to some usages, experiences or memories.<br />
        There may be a way to build a profil based on interrest, to exchange, 
        or even go further with those commun interrest.<br /></p>
        
      </div>
          
      <div class="row">

           
        <div class="col-xs-6 col-lg-4">

          @if(Session::has('message'))
           <p>{{ Session::get('message') }} </p>
          @endif

          {{ date('Y, M, d') }}

          @if(Auth::check())

                  <p>Welcome 
                    <nav class="dropdown">
                      <ul>
                        <li><a href="">Sign out</a></li>
                        <li>{!! URL::route('signout', 'Sign out') !!}</li>
                      </ul>
                    </nav>
                  </p>

                @elseif(Auth::guest())

                  Auth::guest

                @else

                  not connected or else

                @endif


        </div><!--/.col-xs-6.col-lg-4-->

            
      </div><!--/row-->

    </div><!--/.col-xs-12.col-sm-9-->

	</div>

</div>

@stop