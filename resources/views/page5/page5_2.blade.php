@extends('templates.default')

@section('title', 'variable2')

@section('content')

<div class="container">

      <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-9">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
          </p>
          <div class="jumbotron">
            <h1>Variables</h1>
            <p>1 different way to give back variables from the controller. <br />
            To be used soon to make more interresting things here.</p>
            </div>
          <div class="row">
           
            <div class="col-xs-6 col-lg-4">

              <p>
                Retreive variable from the route file :<br />
                {{ $valeur1 }}, {{ $valeur2 }}
              </p>

            </div><!--/.col-xs-6.col-lg-4-->
            
          </div><!--/row-->
        </div><!--/.col-xs-12.col-sm-9-->


@stop