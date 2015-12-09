@extends('templates.default')

@section('title', 'variable')

@section('content')

<div class="container">

      <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-9">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
          </p>
          <div class="jumbotron">
            <h1>Blog</h1>
            <p>Got anything to say ?<br />
            Just post it !</p>
            </div>
          <div class="row">
           
            <div class="col-xs-6 col-lg-4">
              
              <p>

                @foreach($postz as $p)
                  @include('page6.partialviewpost', array('post' => $p))
                @endforeach

              </p>

            </div><!--/.col-xs-6.col-lg-4-->

            <div class="col-xs-6 col-lg-4">

              <h3><a href="{{ URL::route('createPost') }}"> Create Post </a></h3>

            </div><!--/.col-xs-6.col-lg-4-->
           
            <div class="col-xs-6 col-lg-4">
              
              <h3>Errors, if any</h3>

              <p>

                @if($errors->any())
                  {{ $errors->first() }}
                @else
                  No error.
                @endif

              </p>

            </div><!--/.col-xs-6.col-lg-4-->

          </div><!--/row-->
        </div><!--/.col-xs-12.col-sm-9-->


@stop