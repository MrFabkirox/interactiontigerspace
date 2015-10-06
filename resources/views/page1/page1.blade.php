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
            <h1>Quotes</h1>
            <p>Some quotes are quite interresting, coming from great men,
            or great movies, let's list them all here !<br />
            Be my guest in making this list grow by adding some.</p>
            </div>
          <div class="row">
           
            <div class="col-xs-6 col-lg-4">
              
              <p style='font-weight: bold'>List of quotes</p>
              
              <p>
              The quotes.<br />
              <a href='{!! URL::route("page1_2") !!}'>quotes_2</a>
              </p>

            </div><!--/.col-xs-6.col-lg-4-->
            
          </div><!--/row-->
        </div><!--/.col-xs-12.col-sm-9-->


@stop