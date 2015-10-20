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
            <h1>Form Validation</h1>
            <p>Page 2, form, validation, and sending back all within Laravel5</p>
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

				<h2>page 2</h2>

				<!-- <form method="POST" action="http://localhost:8000/page2postp2">
					<input id="name" name="name" type="text" placeholder="name" />
					<input name="city" type="text" placeholder="city" />
					<input type="hidden" name="_token" value="{{ csrf_token() }}" />
					<button type="submit">say it</button>
				</form> -->

				
{!! Form::open(array('url' => 'page2postp2', 'method' => 'POST')) !!}
                
        <p>
        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name') !!}
        </p>

        <p>
        {!! Form::label('city', 'City:') !!}
        {!! Form::text('city') !!}
        </p>

        <p>
        {!! Form::submit('say it') !!}
        </p>

{!! Form::close() !!}


			</div><!--/.col-xs-6.col-lg-4-->
            
          </div><!--/row-->
        </div><!--/.col-xs-12.col-sm-9-->

	</div>


</div>


@stop