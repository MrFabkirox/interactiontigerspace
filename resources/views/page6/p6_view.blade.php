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
            <h1>Blog Post</h1>
            <p>Some blog post<br />
            View</p>
            </div>
          <div class="row">
           
            <div class="col-xs-6 col-lg-4">
              
              <h3>{{ $postz->title }}</h3>

              <p>
                {{ $postz->content }}
              </p>

              <p>
                {{ $postz->created_at->diffForHumans() }}
              </p>

            </div><!--/.col-xs-6.col-lg-4-->

          </div><!--/row-->
        </div><!--/.col-xs-12.col-sm-9-->


@stop