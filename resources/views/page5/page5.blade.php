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
            <h1>Variables</h1>
            <p>5 different ways to give back variables from the controller<br />
            To be used soon to make more interresting things here.</p>
            </div>
          <div class="row">
           
            <div class="col-xs-6 col-lg-4">
              
              <p style='font-weight: bold'>4 variables from the controller, first function</p>
              
              <p>
              	@if(isset( $name ))
                  {{ $name }}<br />
  				      @else
                  No name given
  				      @endif

  				      {{ $age }}<br />
  		
  				      <?php echo $location; ?><br />
  				      <?php echo $specialty; ?><br />
              </p>

            </div><!--/.col-xs-6.col-lg-4-->
            <div class="col-xs-6 col-lg-4">
              
              <p style='font-weight: bold'>Retreive variable from the controller, second function</p>
              
              <p>
                <a href='{!! URL::route("page5_2") !!}'>variables_2</a>
              </p>
              
            </div><!--/.col-xs-6.col-lg-4-->
            
          </div><!--/row-->
        </div><!--/.col-xs-12.col-sm-9-->


@stop