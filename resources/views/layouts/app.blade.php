<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>The Dope Blog | Sir Domnic Says</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="description" content="Avenger Admin Theme">
    <meta name="author" content="KaijuThemes">

    <link href='http://fonts.googleapis.com/css?family=RobotoDraft:300,400,400italic,500,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,400italic,600,700' rel='stylesheet' type='text/css'>

    <!--[if lt IE 10]>
        <script type="text/javascript" src="assets/js/media.match.min.js"></script>
        <script type="text/javascript" src="assets/js/placeholder.min.js"></script>
    <![endif]-->

    <link type="text/css" href="{{URL::assets('assets/fonts/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">        <!-- Font Awesome -->
    <link type="text/css" href="{{URL::assets('assets/css/styles.css" rel="stylesheet">                                     <!-- Core CSS with all styles -->

    <link type="text/css" href="{{URL::assets('assets/plugins/jstree/dist/themes/avenger/style.min.css')}}" rel="stylesheet">    <!-- jsTree -->
    <link type="text/css" href="{{URL::assets('assets/plugins/codeprettifier/prettify.css')}}" rel="stylesheet">                <!-- Code Prettifier -->
    <link type="text/css" href="{{URL::assets('assets/plugins/iCheck/skins/minimal/blue.css')}}" rel="stylesheet">              <!-- iCheck -->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries. Placeholdr.js enables the placeholder attribute -->
    <!--[if lt IE 9]>
        <link type="text/css" href="assets/css/ie8.css" rel="stylesheet">
        <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.1.0/respond.min.js"></script>
        <script type="text/javascript" src="assets/plugins/charts-flot/excanvas.min.js"></script>
        <script type="text/javascript" src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- The following CSS are included as plugins and can be removed if unused-->
    
<link type="text/css" href="{{URL::assets('assets/plugins/form-daterangepicker/daterangepicker-bs3.css" rel="stylesheet"> 	<!-- DateRangePicker -->
<link type="text/css" href="{{URL::assets('assets/plugins/fullcalendar/fullcalendar.css" rel="stylesheet"> 					<!-- FullCalendar -->
<link type="text/css" href="{{URL::assets('assets/plugins/charts-chartistjs/chartist.min.css" rel="stylesheet"> 				<!-- Chartist -->

    </head>

    <body class="infobar-offcanvas">
            <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle Navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="http://www.findalltogether.com">Find All Together</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li>
              <a href="{{ url('/') }}">Home</a>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            @if (Auth::guest())
            <li>
              <a href="{{ url('/auth/login') }}">Login</a>
            </li>
            <li>
              <a href="{{ url('/auth/register') }}">Register</a>
            </li>
            @else
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                @if (Auth::user()->can_post())
                <li>
                  <a href="{{ url('/new-post') }}">Add new post</a>
                </li>
                <li>
                  <a href="{{ url('/user/'.Auth::id().'/posts') }}">My Posts</a>
                </li>
                @endif
                <li>
                  <a href="{{ url('/user/'.Auth::id()) }}">My Profile</a>
                </li>
                <li>
                  <a href="{{ url('/auth/logout') }}">Logout</a>
                </li>
              </ul>
            </li>
            @endif
          </ul>
        </div>
      </div>
    </nav>
    <div class="container">
      @if (Session::has('message'))
      <div class="flash alert-info">
        <p class="panel-body">
          {{ Session::get('message') }}
        </p>
      </div>
      @endif
      @if ($errors->any())
      <div class='flash alert-danger'>
        <ul class="panel-body">
          @foreach ( $errors->all() as $error )
          <li>
            {{ $error }}
          </li>
          @endforeach
        </ul>
      </div>
      @endif
      <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h2>@yield('title')</h2>
              @yield('title-meta')
            </div>
            <div class="panel-body">
              @yield('content')
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <p>Copyright © 2015 | <a href="http://www.ralphowino.com">RalphOwino Consulting</a></p>
        </div>
      </div>
    </div>
    <!-- Scripts -->
    <script type="text/javascript" src="{{URL::assets('assets/js/jquery-1.10.2.min.js')}}"></script> 							<!-- Load jQuery -->
<script type="text/javascript" src="{{URL::assets('assets/js/jqueryui-1.9.2.min.js')}}"></script> 							<!-- Load jQueryUI -->

<script type="text/javascript" src="{{URL::assets('assets/js/bootstrap.min.js')}}"></script> 								<!-- Load Bootstrap -->


<script type="text/javascript" src="{{URL::assets('assets/plugins/easypiechart/jquery.easypiechart.js')}}"></script> 		<!-- EasyPieChart-->
<script type="text/javascript" src="{{URL::assets('assets/plugins/sparklines/jquery.sparklines.min.js')}}"></script>  		<!-- Sparkline -->
<script type="text/javascript" src="{{URL::assets('assets/plugins/jstree/dist/jstree.min.js')}}"></script>  				<!-- jsTree -->

<script type="text/javascript" src="{{URL::assets('assets/plugins/codeprettifier/prettify.js')}}"></script> 				<!-- Code Prettifier  -->
<script type="text/javascript" src="{{URL::assets('assets/plugins/bootstrap-switch/bootstrap-switch.js')}}"></script> 		<!-- Swith/Toggle Button -->

<script type="text/javascript" src="{{URL::assets('assets/plugins/bootstrap-tabdrop/js/bootstrap-tabdrop.js')}}"></script>  <!-- Bootstrap Tabdrop -->

<script type="text/javascript" src="{{URL::assets('assets/plugins/iCheck/icheck.min.js')}}"></script>     					<!-- iCheck -->

<script type="text/javascript" src="{{URL::assets('assets/js/enquire.min.js')}}"></script> 									<!-- Enquire for Responsiveness -->

<script type="text/javascript" src="{{URL::assets('assets/plugins/bootbox/bootbox.js')}}"></script>							<!-- Bootbox -->

<script type="text/javascript" src="{{URL::assets('assets/plugins/simpleWeather/jquery.simpleWeather.min.js')}}"></script> <!-- Weather plugin-->

<script type="text/javascript" src="{{URL::assets('assets/plugins/nanoScroller/js/jquery.nanoscroller.min.js')}}"></script> <!-- nano scroller -->

<script type="text/javascript" src="{{URL::assets('assets/plugins/jquery-mousewheel/jquery.mousewheel.min.js')}}"></script> 	<!-- Mousewheel support needed for jScrollPane -->

<script type="text/javascript" src="{{URL::assets('assets/js/application.js')}}"></script>
<script type="text/javascript" src="{{URL::assets('assets/demo/demo.js')}}"></script>
<script type="text/javascript" src="{{URL::assets('assets/demo/demo-switcher.js')}}"></script>

<!-- End loading site level scripts -->
    
    <!-- Load page level scripts-->
    
<script type="text/javascript" src="{{URL::assets('assets/plugins/fullcalendar/fullcalendar.min.js')}}"></script>   				<!-- FullCalendar -->

<script type="text/javascript" src="{{URL::assets('assets/plugins/wijets/wijets.js')}}"></script>     								<!-- Wijet -->

<script type="text/javascript" src="{{URL::assets('assets/plugins/charts-chartistjs/chartist.min.js')}}"></script>               	<!-- Chartist -->
<script type="text/javascript" src="{{URL::assets('assets/plugins/charts-chartistjs/chartist-plugin-tooltip.js')}}"></script>    	<!-- Chartist -->

<script type="text/javascript" src="{{URL::assets('assets/plugins/form-daterangepicker/moment.min.js')}}"></script>              	<!-- Moment.js for Date Range Picker -->
<script type="text/javascript" src="{{URL::assets('assets/plugins/form-daterangepicker/daterangepicker.js')}}"></script>     				<!-- Date Range Picker -->

<script type="text/javascript" src="{{URL:assets('assets/demo/demo-index.js')}}"></script> 										<!-- Initialize scripts for this page-->

    <!-- End loading page level scripts-->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
  </body>
</html>
