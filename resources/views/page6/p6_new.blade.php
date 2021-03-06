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
                <form action="{{ URL::route('createPost') }}" method="post">

                  <p><input name="title" type="text" placeholder="Title" /></p>
                  <p><textarea name="content" placeholder="Write the content of the post here"
                    rows="6" cols="50"></textarea></p>

                  <p><input type="hidden" name="_token" value="{{ csrf_token() }}" />
                  <input type="submit" /></p>
                
                </form>
              </p>

            </div><!--/.col-xs-6.col-lg-4-->

          </div><!--/row-->
        </div><!--/.col-xs-12.col-sm-9-->


@stop