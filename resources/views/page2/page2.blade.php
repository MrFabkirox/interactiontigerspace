@extends('templates.default')

@section('title', 'form validation')

@section('content')

	
<div class="container">

  <div class="row row-offcanvas row-offcanvas-right">

    <div class="col-xs-12 col-sm-9">
      <p class="pull-right visible-xs">
        <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
      </p>
      <div class="jumbotron">
        <h1>Key Words</h1>
        <p>
          A clear and organized view in my mind, is to have a summerized amount of key words. 
          I will list some of them here concerning the creation of this website.<br />
          The goal of this website is to improve my skill in the PHP Laravel framework, but that doesn't keep me
          from exploring some ideas of useful features i could hopefully think of and develop.<br />
          I will then summerize here all the technical key words i use here, to make lighter the other part of the website.
        </p>
      </div>
      <div class="row">
           
        <div class="col-xs-6 col-lg-4">

      		@if ($errors)
      			<ul>
      				@foreach ($errors->all() as $error)
      				<li>{{ $error }}</li>
      				@endforeach
      			</ul>
      		@endif


          <h3>Form Validation</h3>

          <p>
            Form validation through Request files injected inside the controller files, all within Laravel5.
          </p>

      		<!-- <form method="POST" action="http://localhost:8000/page2postp2">
      		<input id="name" name="name" type="text" placeholder="name" />
      		<input name="city" type="text" placeholder="city" />
      		<input type="hidden" name="_token" value="{{ csrf_token() }}" />
      		<button type="submit">say it</button>
      		</form> -->				
          {!! Form::open(array('url' => 'page2postp2', 'method' => 'POST')) !!}
                              
            <p>{!! Form::label('name', 'Name:') !!}
            {!! Form::text('name') !!}</p>
            <p>{!! Form::label('city', 'City:') !!}
            {!! Form::text('city') !!}</p>
            <p>{!! Form::submit('say it') !!}</p>

          {!! Form::close() !!}

        </div><!--/.col-xs-6.col-lg-4-->

        <div class="col-xs-6 col-lg-4">
              
          <h3>Blade Templating Engine</h3>
          <p>
            Blade is a templating engine provided with Laravel. Unlike controller layouts,
            Blade is driven by template inheritance and sections.
            All Blade templates should use the .blade.php extension.
          </p>

        </div><!--/.col-xs-6.col-lg-4-->            

        <div class="col-xs-6 col-lg-4">

          <h3>Databases</h3>

          <p>
            Switching from the MySql database of Laravel5 to the PostgreSQL of Heroku.
          </p>
            
        </div><!--/.col-xs-6.col-lg-4-->

        <div class="col-xs-6 col-lg-4">
        </div><!--/.col-xs-6.col-lg-4-->

        <div class="col-xs-6 col-lg-4">
        </div><!--/.col-xs-6.col-lg-4-->

      </div><!--/row-->

    </div><!--/.col-xs-12.col-sm-9-->

	</div>

</div>

@stop