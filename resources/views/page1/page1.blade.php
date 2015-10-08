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

                
                @foreach ($quote as $q)
                  <p>{{ $q->quote }}<br /><span class="QuoteFrom">({{ $q->name }}, from {{ $q->origin }})</span></p>
                @endforeach 
                </p>

              </p>

            </div><!--/.col-xs-6.col-lg-4-->
            <div class="col-xs-6 col-lg-4">

              <p>

                {!! Form::open(array('url' => 'addquote', 'method' => 'POST')) !!}
                
                <p>
                {!! Form::label('name', 'Name:') !!}
                {!! Form::text('name', Input::old('name'), array('placeholder'=>'Enter your name',
                  'size' => '30')) !!}
                </p>
                
                <p>
                {!! Form::label('from', 'From:') !!}
                {!! Form::text('from', Input::old('from'), array('placeholder'=>'Who is it from? Some People?',
                  'size' => '30')) !!}
                </p>

                <p>
                {!! Form::label('quote', 'Quote:') !!}
                {!! Form::textarea('quote', Input::old('quote'), array('placeholder'=>'Tap the quote in here',
                  'size' => '40x5')) !!}
                </p>

                <p>
                {!! Form::submit('Add Quote') !!}
                </p>

                {!! Form::close() !!}

              </p>


            </div><!--/.col-xs-6.col-lg-4-->
            
            <div class="col-xs-6 col-lg-4">
            </div><!--/.col-xs-6.col-lg-4-->
           
            <div class="col-xs-6 col-lg-4">

              @if ($errors)
                <ul>
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
                </ul>
              @endif

            </div><!--/.col-xs-6.col-lg-4-->

          </div><!--/row-->
        </div><!--/.col-xs-12.col-sm-9-->


@stop