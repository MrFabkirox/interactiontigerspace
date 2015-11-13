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

        <h1>Defining items, home</h1>
        
        <p>Having interrest, passions, are most of the time linked to objects.<br />
        Those objects are linked to some usages, experiences or memories.<br />
        There may be a way to build a profil based on interrest, to exchange, 
        or even go further with those commun interrest.<br /></p>
        
      </div>

          <div class="row">
           
            <div class="col-xs-6 col-lg-4">
              
              <p style='font-weight: bold'>Defining items, home</p>
                          
              <p>

                  <p> {{ $product->title }}</p>
                  <p>{{ $product->description }}</p>

                  {!! HTML::image($product->image, $product->title, array('width'=>'240',
                    'height'=>'127')) !!}

              </p>

            </div><!--/.col-xs-6.col-lg-4-->
            
          </div><!--/row-->
        </div><!--/.col-xs-12.col-sm-9-->


@stop