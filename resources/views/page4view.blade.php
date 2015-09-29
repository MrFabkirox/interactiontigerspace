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
            <p>Let s play with the MySql database.</p>
            </div>
          <div class="row">
           
            <div class="col-xs-6 col-lg-4">
              
              Authors and bio.<br />
              <p>

                Name: {{ $author->name }}<br />

                Bio: {{ $author->bio }}

              </p>

              <p>
              <ul>
                <li><a href='{!! URL::route("page4") !!}'>page4</a></li>
                <li><a href='{!! URL::route("user", array("id"=> "{{ $author->id }}" )) !!}'>{{ $a->name }}</a></li>
                <li><a href='{!! URL::route("editauthor", array("id"=> "{{ $author->id }}" )) !!}'>Edit this author laravel way</a></li>
                <li><a href='http://localhost:8000/page4edit/{{ $author->id }}'>Edit this author html basic</a></li>
              </ul>

                <a href='http://localhost:8000/page4'>Back to Authors</a><br />
                <a href='http://localhost:8000/page4edit/{{ $author->id }}'>Edit this author</a><br />
              </p>

            </div><!--/.col-xs-6.col-lg-4-->
            
          </div><!--/row-->
        </div><!--/.col-xs-12.col-sm-9-->

	</div>


@stop