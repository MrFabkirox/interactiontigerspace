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

        <h1>Defining items</h1>
        
        <p>Having interrest, passions, are most of the time linked to objects.<br />
        Those objects are linked to some usages, experiences or memories.<br />
        There may be a way to build a profil based on interrest, to exchange, 
        or even go further with those commun interrest.<br /></p>
        
      </div>
          
      <div class="row">

        <div class="col-xs-6 col-lg-4">
<p>
          {!! Form::open(array('url'=>'page3/products/create', 'files'=>true)) !!}<br />
          <p>{!! Form::select('category_id', $categories) !!}</p>

          <p>{!! Form::text('title',null , array(
            'placeholder'=>'Title')) !!}</p>

          <p>{!! Form::textarea('description',null , array(
            'placeholder'=>'Description','size' => '35x5')) !!}</p>
          
          <p>{!! Form::text('price',null , array(
            'placeholder'=>'Rough value')) !!}</p>

          <p>{!! Form::label('image', 'Choose an image') !!}
          {!! Form::file('image') !!}</p>

          <p>{!! Form::submit('create Product') !!}</p>
          {!! Form::close() !!}</p>
</p>

        </div><!--/.col-xs-6.col-lg-4-->

        <div class="col-xs-6 col-lg-4">

          @foreach($productTags as $prod)
            <li>
            
            	{!! HTML::image($prod->image, $prod->title, array('width'=>'50')) !!}
              {!! $prod-> title !!} - 
          {!! Form::open(array('url'=>'page3/products/destroy')) !!}
              {!! Form::hidden('id', $prod->id) !!}

              {!! Form::close() !!}

          {!! Form::open(array('url'=>'page3/products/toggle-availability')) !!}
              {!! Form::hidden('id', $prod->id) !!}
              {!! Form::select('availability', array('1'=>'In Stock', '0'=>'Out of stock'),
              	$prod->availability) !!}
              {!! Form::submit('update') !!}
              {!! Form::close() !!}

            </li>
          @endforeach
          
        </div><!--/.col-xs-6.col-lg-4-->
           
        <div class="col-xs-6 col-lg-4">

          <h3>Create Your item</h3>

            @if(Session::has('message'))
             <p>{{ Session::get('message') }} </p>
            @endif

            <p>
              @if($errors)
                <ul>
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
                </ul>
              @else
                No error to display
              @endif
            </p>

        </div><!--/.col-xs-6.col-lg-4-->

      </div><!--/row-->

    </div><!--/.col-xs-12.col-sm-9-->

	</div>

</div>

@stop