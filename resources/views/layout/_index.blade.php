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
@stop


@section('head_css')
    <link href="./media/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="./media/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>

 
@show

@section('head_js')
@parent
@stop

@section('body')
<!-- 主要内容-->
@section('content')
@show
@stop


@section('afterBody')
    @section('extraPlugin')
    @show{{-- 引入额外依赖JS插件 --}}
    <script src="./media/js/jquery-1.10.1.min.js" type="text/javascript"></script>
    <script src="./media/js/bootstrap.min.js" type="text/javascript"></script>
@stop











