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

				<h2>Register</h2>

				<p>Create an account, please use a non existing email adress.</p>

				<p>
					<form method="post" action="auth/register/">
						<input type="hidden" name="_token" value="{{ csrf_token() }}"/>

						<p><input type="text" name="name" placeholder="Name"/></p>
						<p><input type="email" name="email" placeholder="Email"/></p>
						<p><input type="password" name="password" placeholder="Password"/></p>
						<p><input type="password" name="password_confirmation" placeholder="Password Confirmation"/></p>
						
						<button type="submit">Register</button>

					</form>
				</p>

            </div><!--/.col-xs-6.col-lg-4-->

            <div class="col-xs-6 col-lg-4">

              <h3>Messages</h3>
              
              @if(Session::has('message'))
                <p>{{ Session::get('message') }} </p>
              @endif

              <p>{{ date('Y, M, d') }}</p>

            </div><!--/.col-xs-6.col-lg-4-->


        </div><!--/row-->
      </div><!--/.col-xs-12.col-sm-9-->

@endsection