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
            <p>Switching from the MySql database of Laravel5 to the PostgreSQL of Heroku.</p>
            </div>
          <div class="row">
           
            <div class="col-xs-6 col-lg-4">
              
              We will retreive data here of the manager id {{ $authors[0]->id }}:<br />
              <p>

                <ul>
                @foreach ($authors as $a)
                  <li><a href='{!! URL::route("user", array("id"=> "{$a->id}" )) !!}'>{{ $a->name }}</a></li>
                @endforeach 
                </ul>

              </p>
                <a href='http://localhost:8000/page4new'>Add a new Author</a>
              <p>

              </p>

            </div><!--/.col-xs-6.col-lg-4-->
            
          </div><!--/row-->
        </div><!--/.col-xs-12.col-sm-9-->

	</div>


@stop