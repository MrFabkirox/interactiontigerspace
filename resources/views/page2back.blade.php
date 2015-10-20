@extends('templates.default')

@section('content')

	
<div class="container">

     <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-9">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
          </p>
          <div class="jumbotron">
            <h1>Form Validation</h1>
            <p>Page 2, form, validation, and sending back all within Laravel5</p>
            </div>
          <div class="row">
           
            <div class="col-xs-6 col-lg-4">


				<h2>page 2 give back</h2>

					{{ $stuff}}



			</div><!--/.col-xs-6.col-lg-4-->
            
          </div><!--/row-->
        </div><!--/.col-xs-12.col-sm-9-->

	</div>


</div>


@stop