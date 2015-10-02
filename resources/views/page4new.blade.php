@extends('templates.default')

@section('content')

<div class="container">

     <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-9">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
          </p>
          <div class="jumbotron">
            <h1>Database</h1>
            <p>Insert new data in the MySql database.</p>
            </div>
          <div class="row">
           
            <div class="col-xs-6 col-lg-4">
              
              Insert new data:<br />
              <p>

                {!! Form::open(array('url' => 'page4create', 'method' => 'POST')) !!}
                
                <p>
                {!! Form::label('name', 'Name:') !!}
                {!! Form::text('name') !!}
                </p>

                <p>
                {!! Form::label('bio', 'Biography:') !!}
                {!! Form::textarea('bio') !!}
                </p>

                <p>
                {!! Form::submit('Add Author') !!}
                </p>

                {!! Form::close() !!}

              </p>

              <p>             

                @if ($errors)
                  <ul>
                    @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                    @endforeach
                  </ul>
                @endif
                
              </p>

            </div><!--/.col-xs-6.col-lg-4-->
            
          </div><!--/row-->
        </div><!--/.col-xs-12.col-sm-9-->

	</div>


@stop