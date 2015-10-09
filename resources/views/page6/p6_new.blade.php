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
            Blog as an object</p>
            </div>
          <div class="row">
           
            <div class="col-xs-6 col-lg-4">
              
              <form action="{{ URL::route('createPost') }}" method="post">

                <input name="title" type="text" placeholder="Title" />
                <textarea name="content" placeholder="Write content of the post here"></textarea><br />

                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <input type="submit" />
                
              </form>

            </div><!--/.col-xs-6.col-lg-4-->

          </div><!--/row-->
        </div><!--/.col-xs-12.col-sm-9-->


@stop