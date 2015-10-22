@extends('templates.default')

@section('content')


    <div class="container">

      <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-9">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
          </p>
          <div class="jumbotron">
            <h1>Welcome,</h1>
            <p><img class="TextWrap1" src="/img/fab.jpg" alt="Fabrice Esope" >Due to my current interrest to php and the laravel5 framework, i have
             created this space to lay down some ideas and practice to 
             improve, learn. This will be a great way to explore some new 
             opportunities for great new project, and meet new great people 
             and environment i am sure.<br />
             My goal is to move forward on development, and you will find here some of my recent professionnal work experiences.
            	Don't hesitate to reach me out on
              <a href="https://fr.linkedin.com/pub/fabrice-esope/36/365/7b7">LinkedIn</a> or 
              <a href="http://www.viadeo.com/profile/0021ovjeecl5pbnk">Viadeo</a> if anything.</p>
          </div>
          <div class="row">
            <div class="col-xs-6 col-lg-4">
              <h2>QA Team</h2>
              <p>
Part of the QA Team, i am in charge of leading of bugfix meeting, in collaboration with product management and support team to ensure the functional correctness.
Selenium, test automation in python (dataset+view+business object+test)
JUnit, unit testing in java (with the framework mockito)
Fitness (test java on database)
              </p>
              <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
            </div><!--/.col-xs-6.col-lg-4-->
            <div class="col-xs-6 col-lg-4">
              <h2>Config Team</h2>
              <p>
                Resolution of Technical issues impacting world sized SaaS platform in Email Marketing.
                Wikipage faq (wikiops, page mediawiki)
                Configurations, settings, analyse of databases request.
                integration : Salesforce, Google Analytics, microsoft dynamics
              </p>
              <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
            </div><!--/.col-xs-6.col-lg-4-->
            <div class="col-xs-6 col-lg-4">
              <h2>Technical Support Analyst</h2>
              <p>Wikipage faq (wikiops, page mediawiki)
                Configurations, settings, analyse of databases request and settings
                integration : Salesforce, Google Analytics, microsoft dynamics </p>
              <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
            </div><!--/.col-xs-6.col-lg-4-->
          </div><!--/row-->
        </div><!--/.col-xs-12.col-sm-9-->


@stop