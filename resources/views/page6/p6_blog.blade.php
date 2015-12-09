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
            <h1>p6_blog</h1>
            <p>p6_blog</p>
            </div>
          <div class="row">
           
            <div class="col-xs-6 col-lg-4">
              
              <p>p6_blog</p>

              <p>

                @foreach($postz as $p)
                  @include('page6.partialviewpost', array('post' => $p))
                @endforeach

              </p>

            </div><!--/.col-xs-6.col-lg-4-->

            <div class="col-xs-6 col-lg-4">

              <p><a href="{{ URL::route('createPost') }}"> Create Post </a></p>

            </div><!--/.col-xs-6.col-lg-4-->
           
            <div class="col-xs-6 col-lg-4">
              
              <p>Errors ?</p>

              <p>

                @if($errors->any())
                  {{ $errors->first() }}
                @endif

              </p>

            </div><!--/.col-xs-6.col-lg-4-->

          </div><!--/row-->
        </div><!--/.col-xs-12.col-sm-9-->


@stop