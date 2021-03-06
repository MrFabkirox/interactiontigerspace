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

        <h1>Defining items, page3</h1>
        
        <p>Having interrest, passions, are most of the time linked to objects.<br />
        Those objects are linked to some usages, experiences or memories.<br />
        There may be a way to build a profil based on interrest, to exchange, 
        or even go further with those commun interrest.<br /></p>
        
      </div>
          
      <div class="row">

        <div class="col-xs-6 col-lg-4">

          <h3>Create a new category</h3>

          {!! Form::open(array('url'=>'page3/categories/create')) !!}
          <p>{!! Form::label('Category Name') !!}</p>
          <p>{!! Form::text('name') !!}</p>
          <p>{!! Form::submit('create') !!}</p>
          {!! Form::close() !!}

        </div><!--/.col-xs-6.col-lg-4-->

        <div class="col-xs-6 col-lg-4">

        <h3>Categories already available</h3>

          @foreach($categories as $cat)
            <li>
              {!! $cat-> name !!} - 
              {!! Form::open(array('url'=>'page3/categories/destroy')) !!}
              {!! Form::hidden('id', $cat->id) !!}

              {!! Form::close() !!}
            </li>
          @endforeach

        </div><!--/.col-xs-6.col-lg-4-->
           
        <div class="col-xs-6 col-lg-4">

        <h3>User Messages</h3>

          @if(Session::has('message'))
            <p>{{ Session::get('message') }} </p>
          @endif

          <p>
            @if($errors->any())
              {{ $errors->first() }}
            @else
              Feel free to add as much category as you want!
            @endif
          </p>

        </div><!--/.col-xs-6.col-lg-4-->
            
      </div><!--/row-->

    </div><!--/.col-xs-12.col-sm-9-->

	</div>

</div>

@stop