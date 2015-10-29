<div class="container">

  <div class="row row-offcanvas row-offcanvas-right">

    <div class="col-xs-12 col-sm-9">
          
      <div class="row">

        <div class="col-xs-6 col-lg-4">

          {!! Form::open(array('url'=>'admin/categories/create')) !!}
          {!! Form::label('Category Name') !!}
          {!! Form::text('name') !!}
          {!! Form::submit('create') !!}
          {!! Form::close() !!}

        </div><!--/.col-xs-6.col-lg-4-->

        <div class="col-xs-6 col-lg-4">

          @foreach($categories as $cat)
            <li>
              {!! $cat-> name !!} - 
          {!! Form::open(array('url'=>'admin/categories/destroy')) !!}
              {!! Form::hidden('id', $cat->id) !!}
              {!! Form::submit('delete') !!}
              {!! Form::close() !!}
            </li>
          @endforeach

        </div><!--/.col-xs-6.col-lg-4-->
           
        <div class="col-xs-6 col-lg-4">

          @if(Session::has('message'))
           <p>{{ Session::get('message') }} </p>
          @endif

          {{ date('Y, M, d') }}

        </div><!--/.col-xs-6.col-lg-4-->
            
      </div><!--/row-->

    </div><!--/.col-xs-12.col-sm-9-->

	</div>

</div>