@extends('layout._back')


@section('content')
    <!-- BEGIN headeer -->
    @include('admin.widgets.header')
    <!-- end header -->

<div class="page-container">
    <!-- BEGIN sidebar -->
    @include('admin.widgets.sidebar')
    <!-- end sidebar -->

    <!-- BEGIN PAGE -->
    <div class="page-content">
        <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
        <div id="portlet-config" class="modal hide">
            <div class="modal-header">
            <button data-dismiss="modal" class="close" type="button"></button>
            <h3>Widget Settings</h3>
        </div>
        <div class="modal-body">
        Widget settings form goes here
        </div>
    </div>
    <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->

    <!-- BEGIN PAGE CONTAINER-->
    <div class="container-fluid">
      <!-- BEGIN PAGE HEADER-->
      <div class="row-fluid">
        <div class="span12">
          <!-- BEGIN PAGE TITLE & BREADCRUMB-->
          <h3 class="page-title">
            <b>{{Session::get('name')}}</b>
            <small>欢迎,本后台依赖于Metronic</small>
          </h3>
          <ul class="breadcrumb">
            <li>
              <i class="icon-home"></i>
              <a href="{{url('/home/'.Session::get('session_id'))}}">主页</a>
              <i class="icon-angle-right"></i>
            </li>
            <li><a href="#">控制台</a></li>
          </ul>
          <!-- END PAGE TITLE & BREADCRUMB-->
        </div>
      </div>
      <!-- END PAGE HEADER-->

      <div id="dashboard">
        <!-- BEGIN DASHBOARD STATS -->
        <div class="row-fluid">
@section('admin_content')
@show
        </div>
        <!-- END DASHBOARD STATS -->
        <div class="clearfix"></div>
      </div>
    </div>
    <!-- END PAGE CONTAINER-->
  </div>
  <!-- END PAGE -->
</div>
    @include('admin.widgets.footer')
@endsection
