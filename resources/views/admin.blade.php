@extends('templates.default')

@section('content')


    <div class="container">

      <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-9">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
          </p>
          <div class="jumbotron">
            <h1>Admin,</h1>
            <p><img class="TextWrap1" src="/img/fab.jpg" alt="Fabrice Esope" >Due to my current interrest to php and the laravel5 framework, i have
             Wlecmome to the admin section.<br />
          </div>

          <div class="row">

            <div class="col-xs-6 col-lg-4">
              <h2>1. Famous Quotes</h2>
              <p>
              </p>
              <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
            </div><!--/.col-xs-6.col-lg-4-->

            <div class="col-xs-6 col-lg-4">
              <h2>2. Defining items</h2>
              <p>
              
              </p>
              <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
            </div><!--/.col-xs-6.col-lg-4-->

            <div class="col-xs-6 col-lg-4">
              <h2></h2>
              <p>
              </p>
              <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
            </div><!--/.col-xs-6.col-lg-4-->

          </div><!--/row-->
        </div><!--/.col-xs-12.col-sm-9-->

@stop