@extends('templates.default')

@section('title', 'databases')

@section('content')

<div class="container">

  <div class="row row-offcanvas row-offcanvas-right">

    <div class="col-xs-12 col-sm-9">
      
      <p class="pull-right visible-xs">
        <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
      </p>
      
      <div class="jumbotron">
        
        <h1>Author List</h1>
        
        <p>Here is a list of famous authors.<br />
        Feel free to add some of your favorite ones.</p>
      
      </div>
      
      <div class="row">
           
        <div class="col-xs-6 col-lg-4">
              
          <p>We will retreive data here of the all the authors.<p />
          
          <p>
            <ul>
              @foreach ($authors as $a)
                <li><a href='{!! URL::route("user", array("id"=> "{$a->id}" )) !!}'>{{ $a->name }}</a></li>
              @endforeach 
            </ul>
          </p>
          
          <a href='{!! URL::route("newuser") !!}'>Add a new Author</a>

        </div><!--/.col-xs-6.col-lg-4-->
            
      </div><!--/row-->

    </div><!--/.col-xs-12.col-sm-9-->

	</div>

</div>

@stop