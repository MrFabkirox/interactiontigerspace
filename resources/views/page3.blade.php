@extends('templates.default')

@section('title', 'blade layout')

@section('content')

<div class="container">

     <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-9">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
          </p>
          <div class="jumbotron">
            <h1>Blade Layout</h1>
            <p>Page 3, this is a layout blade php.<br />
            Blade is a templating engine provided with Laravel. Unlike controller layouts, Blade is driven by template inheritance and sections. All Blade templates should use the .blade.php extension.</p>
            </div>
          <div class="row">
           
            <div class="col-xs-6 col-lg-4">
              

				this is a layout blade php

				@if(Session::has('message'))
					<p id="message">{{ Session::get('message') }} </p>
				@endif

				{{ date('Y, M, d') }}

			</div><!--/.col-xs-6.col-lg-4-->
            
          </div><!--/row-->
        </div><!--/.col-xs-12.col-sm-9-->

	</div>



@stop