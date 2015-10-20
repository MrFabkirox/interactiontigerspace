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
            <p>Edition</p>
            </div>
          <div class="row">
           
            <div class="col-xs-6 col-lg-4">
              
              Author to edit: {{ $author->name }}<br />
              <p>

                render('common.author_errors')<br />

                {!! Form::open(array('url' => 'page4update', 'method' => 'PUT')) !!}

                <p>
                  {!! Form::label('name', 'Name:') !!}<br />
                  {!! Form::text('name', $author->name) !!}
                </p>

                <p>
                  {!! Form::label('bio', 'Biography:') !!}<br />
                  {!! Form::textarea('bio', $author->bio) !!}
                </p>

                {!! Form::hidden('id', $author->id) !!}

                <p>
                  {!! Form::submit('Update Author') !!}
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