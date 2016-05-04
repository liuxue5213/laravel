@extends('layout._base')

@section('hacker_header')
<!--
  _  _
 | |(_)
 | | _  _   _ __  __ _   _   ___
 | || || | | |\ \/ /| | | | / _ \
 | || || |_| | >  < | |_| ||  __/
 |_||_| \__,_|/_/\_\ \__,_| \___|

-->

<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<!-- BEGIN HEAD -->
@stop

@section('head_css')
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="{{ asset('/media/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('/media/css/bootstrap-responsive.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('/media/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('/media/css/style-metro.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('/media/css/style.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('/media/css/style-responsive.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('/media/css/default.css')}}" rel="stylesheet" type="text/css" id="style_color"/>
    <link href="{{ asset('/media/css/uniform.default.css')}}" rel="stylesheet" type="text/css"/>
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL STYLES -->
    <link href="{{ asset('/media/css/jquery.gritter.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('/media/css/daterangepicker.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/media/css/fullcalendar.css')}}')}}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('/media/css/jqvmap.css')}}')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/media/css/jquery.easy-pie-chart.css')}}')}}" rel="stylesheet" type="text/css" />

@stop

@section('head_js')
@parent
@stop


@section('body_attr')
@stop

@section('body')
<!-- 主要内容-->
@section('content')
@show
@stop


@section('afterBody')
    @section('extraPlugin')
    @show{{-- 引入额外依赖JS插件 --}}
    <!-- BEGIN CORE PLUGINS -->
    <script src="{{ asset('/media/js/jquery-1.10.1.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('/media/js/jquery-migrate-1.2.1.min.js')}}" type="text/javascript"></script>

    <!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js')}} before bootstrap.min.js')}} to fix bootstrap tooltip conflict with jquery ui tooltip -->
    <script src="{{ asset('/media/js/bootstrap.min.js')}}" type="text/javascript"></script>
    <!--[if lt IE 9]>
    <script src="{{ asset('/media/js/excanvas.min.js')}}"></script>
    <script src="{{ asset('/media/js/respond.min.js')}}"></script>
    <![endif]-->
    <script src="{{ asset('/media/js/jquery.slimscroll.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('/media/js/jquery.blockui.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('/media/js/jquery.cookie.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('/media/js/jquery.uniform.min.js')}}" type="text/javascript" ></script>
    <!-- END CORE PLUGINS -->

    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src="{{ asset('/media/js/jquery.vmap.js')}}" type="text/javascript"></script>
    <script src="{{ asset('/media/js/jquery.vmap.russia.js')}}" type="text/javascript"></script>
    <script src="{{ asset('/media/js/jquery.vmap.world.js')}}" type="text/javascript"></script>
    <script src="{{ asset('/media/js/jquery.vmap.europe.js')}}" type="text/javascript"></script>
    <script src="{{ asset('/media/js/jquery.vmap.germany.js')}}" type="text/javascript"></script>
    <script src="{{ asset('/media/js/jquery.vmap.usa.js')}}" type="text/javascript"></script>
    <script src="{{ asset('/media/js/jquery.vmap.sampledata.js')}}" type="text/javascript"></script>
    <script src="{{ asset('/media/js/jquery.flot.js')}}" type="text/javascript"></script>
    <script src="{{ asset('/media/js/jquery999.flot.resize.js')}}" type="text/javascript"></script>
    <script src="{{ asset('/media/js/jquery.pulsate.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('/media/js/date.js')}}" type="text/javascript"></script>
    <script src="{{ asset('/media/js/daterangepicker.js')}}" type="text/javascript"></script>
    <script src="{{ asset('/media/js/jquery.gritter.js')}}" type="text/javascript"></script>
    <script src="{{ asset('/media/js/fullcalendar.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('/media/js/jquery.easy-pie-chart.js')}}" type="text/javascript"></script>
    <script src="{{ asset('/media/js/jquery.sparkline.min.js')}}" type="text/javascript"></script>
    <!-- END PAGE LEVEL PLUGINS -->

    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="{{ asset('/media/js/app.js')}}" type="text/javascript"></script>
    <script src="{{ asset('/media/js/index.js')}}" type="text/javascript"></script>
    <!-- END PAGE LEVEL SCRIPTS -->

    <script>
        jQuery(document).ready(function() {
           App.init(); // initlayout and core plugins
           Index.init();
           Index.initJQVMAP(); // init index page's custom scripts
           Index.initCalendar(); // init index page's custom scripts
           Index.initCharts(); // init index page's custom scripts
           Index.initChat();
           Index.initMiniCharts();
           Index.initDashboardDaterange();
           Index.initIntro();
        });
    </script>
    <!-- END JAVASCRIPTS -->

<script type="text/javascript">  var _gaq = _gaq || [];  _gaq.push(['_setAccount', 'UA-37564768-1']);  _gaq.push(['_setDomainName', 'keenthemes.com']);  _gaq.push(['_setAllowLinker', true]);  _gaq.push(['_trackPageview']);  (function() {    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;    ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js')}}';    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);  })();</script>
<!-- END BODY -->

@stop
