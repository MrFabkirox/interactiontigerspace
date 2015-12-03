@extends('templates.default')

@section('content')


    <div class="container">

      <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-9">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
          </p>
          <div class="jumbotron">
            <h1>Admin,</h1>
            <p>
              Welcome to the admin section.<br />
              The View Composer will be needed here
            </p>
          </div>

          <div class="row">

            <div class="col-xs-6 col-lg-4">
              <h2>1. Famous Quotes</h2>
              <p>
              </p>
              <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
            </div><!--/.col-xs-6.col-lg-4-->

            <div class="col-xs-6 col-lg-4">
              <h2>2. Defining items, items</h2>
              <p>
                @foreach($tags as $prod)
                  <li>
                  
                    {!! HTML::image($prod->image, $prod->title, array('width'=>'50')) !!}
                    {!! $prod-> title !!} - 
                {!! Form::open(array('url'=>'page3/products/destroy')) !!}
                    {!! Form::hidden('id', $prod->id) !!}
                    {!! Form::submit('delete') !!}
                    {!! Form::close() !!}

                {!! Form::open(array('url'=>'page3/products/toggle-availability')) !!}
                    {!! Form::hidden('id', $prod->id) !!}
                    {!! Form::select('availability', array('1'=>'In Stock', '0'=>'Out of stock'),
                      $prod->availability) !!}
                    {!! Form::submit('update') !!}
                    {!! Form::close() !!}

                  </li>
                @endforeach
              </p>
              <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
            </div><!--/.col-xs-6.col-lg-4-->

            <div class="col-xs-6 col-lg-4">
              <h2></h2>
              <p>

                {{--@foreach($categories as $cat)
                  <li>
                    {!! $cat-> name !!} - 
                {!! Form::open(array('url'=>'page3/adminCategories/destroy')) !!}
                    {!! Form::hidden('id', $cat->id) !!}
                    {!! Form::submit('delete') !!}
                    {!! Form::close() !!}
                  </li>
                @endforeach--}}

              </p>
              <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
            </div><!--/.col-xs-6.col-lg-4-->


            <div class="col-xs-6 col-lg-4">

            <p>

            <p>test zone !!!!!!!!!!!!!!!!!!!!!!!!!!!</p>



            </p>

            </div><!--/.col-xs-6.col-lg-4-->


          </div><!--/row-->
        </div><!--/.col-xs-12.col-sm-9-->

@stop