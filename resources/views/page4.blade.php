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
              
              We will retreive data here:<br />
              <!--echo user::all(); ko-->
              <p>

                <ul>
                @foreach ($authors as $a)
                  ---{!! URL::route('user', array('id'=>1)) !!}---<br />
                  <li><a href='http://interactiontigerspace.herokuapp.com/page4view/{{ $a->id }}'>{{ $a->name }}</a></li>
                  <!--<li><a href='http://localhost:8000/page4view/{{ $a->id }}'>{{ $a->name }}</a></li>-->

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