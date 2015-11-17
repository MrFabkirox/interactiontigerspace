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

        <h1>Defining items, index</h1>
        
        <p>Having interrest, passions, are most of the time linked to objects.<br />
        Those objects are linked to some usages, experiences or memories.<br />
        There may be a way to build a profil based on interrest, to exchange, 
        or even go further with those commun interrest.<br /></p>
        
      </div>

          <div class="row">
          <div id="catnav">
           
            <div class="col-xs-6 col-lg-4">
              
              <p style='font-weight: bold'>Last Items</p>
                         
              <p>

              @foreach($products as $product)

                <h3>{{ $product->title }}</h3>

                <a href="/home/view/{{ $product->id }}">
                  {!! HTML::image($product->image, $product->title, array('width'=>'240',
                    'height'=>'127')) !!}
                </a>

              @endforeach
              </p>


            </div><!--/.col-xs-6.col-lg-4-->

           
            <div class="col-xs-6 col-lg-4">
              
              <p style='font-weight: bold'>Login</p>

              <div id="user-menu">                         
              
                <p>@if(Auth::check())

                  Welcome {!! Auth::user()->email !!}
                    <nav class="dropdown">
                      <ul>
                        <li><a href="{!! URL::route('signout', 'Sign out') !!}">logout</a></li>
                      </ul>
                    </nav>
                  </p>

                <p>@elseif(Auth::guest())

                  Auth::guest

                @else

                  not connected or else

                @endif</p>

              </div>


            </div><!--/.col-xs-6.col-lg-4-->
           
        <div class="col-xs-6 col-lg-4">
          
          <p style='font-weight: bold'>Last Items</p>
                     
          <p>

          @foreach($usr as $u)

            <h3>{{ $u->firstname }}</h3>
            <h3>{{ $u->lastname }}</h3>
            <h3>{{ $u->email }}</h3>
            <h3>{{ $u->password }}</h3>


          @endforeach
          </p>


        </div><!--/.col-xs-6.col-lg-4-->

        <div class="col-xs-6 col-lg-4">

          <li><a href='{!! URL::route("newaccount") !!}'>newaccount</a></li>
          <li><a href='{!! URL::route("newaccount") !!}'>signin</a></li>
          <p>

          <form method="get" action="/auth/logout">
            <input type="hidden" name="_token" value="{{ csrf_token() }}"><br />
           <button type="submit">Log out</button><br />
          </form>

        </p>

        <p>

          <form method="post" action="/auth/login">
            <input type="hidden" name="_token" value="{{ csrf_token() }}"><br />
            <input type="text" name="email" value="email"><br />
            <input type="text" name="password" value="passwod"><br />
            <button type="submit">Log in</button><br />
          </form>

        </p>

        </div><!--/.col-xs-6.col-lg-4-->


        </div><!--/row-->
      </div><!--/.col-xs-12.col-sm-9-->


@stop