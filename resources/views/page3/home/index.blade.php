@extends('templates.default')

@section('title', 'Defining Items')

@section('content')

<div class="container">

  <div class="row row-offcanvas row-offcanvas-right">

    <div class="col-xs-12 col-sm-9">
      <p class="pull-right visible-xs">
        <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
      </p>

      <div class="jumbotron">

        <h1>Defining items, index</h1>
        
        <p>Having interrest, passions, are most of the time linked to objects.<br />
        Those objects are linked to some usages, experiences or memories.<br />
        There may be a way to build a profil based on interrest, to exchange, 
        or even go further with those commun interrest.<br /></p>
        
      </div>

          <div class="row">
          <div id="catnav">
           
            <div class="col-xs-6 col-lg-4">
              
              <p style='font-weight: bold'>Last Items</p>
                         
              <p>

              @foreach($products as $product)

                <h3>{{ $product->title }}</h3>

                <a href="/home/view/{{ $product->id }}">
                  {!! HTML::image($product->image, $product->title, array('width'=>'240',
                    'height'=>'127')) !!}
                </a>

              @endforeach
              </p>


            </div><!--/.col-xs-6.col-lg-4-->

            <div class="col-xs-6 col-lg-4">

            <a href="http://interactiontigerspace.herokuapp.com/page3/products" class="list-group-item">Create Item</a>
            <a href="http://interactiontigerspace.herokuapp.com/page3/adminCategories" class="list-group-item">Create Categories</a>

            </div><!--/.col-xs-6.col-lg-4-->

            <div class="col-xs-6 col-lg-4">

              <h3>Messages</h3>
              
              @if(Session::has('message'))
                <p>{{ Session::get('message') }} </p>
              @endif

              <p>{{ date('Y, M, d') }}</p>

            </div><!--/.col-xs-6.col-lg-4-->
            
           
            <div class="col-xs-6 col-lg-4">

              <h3>Messages</h3>

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