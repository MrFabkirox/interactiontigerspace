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
            <p>4 different ways to give back variables from the controller. <br />
            To be used soon to make more interresting things here.</p>
            </div>
          <div class="row">
           
            <div class="col-xs-6 col-lg-4">
              
              <h2></h2>
              
            	@if(isset( $name ))
                {{ $name }}<br />
				      @else
                No name given
				      @endif

				      {{ $age }}<br />
		
				      <?php echo $location; ?><br />
				      <?php echo $specialty; ?><br />

            </div><!--/.col-xs-6.col-lg-4-->
            
          </div><!--/row-->
        </div><!--/.col-xs-12.col-sm-9-->


@stop