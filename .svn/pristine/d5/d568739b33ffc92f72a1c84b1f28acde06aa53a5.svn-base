@extends('layout._index')

@section('title')
	music
@endsection


@section('head_css')
    <link href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
@endsection


@section('content')
<div style="float:left">
   <iframe frameborder="no" border="0" marginwidth="0" marginheight="0" width=330 height=450 src="http://music.163.com/outchain/player?type=0&id=72695648&auto=1&height=430"></iframe>
</div>

<div class="portlet box blue" >
    <div class="portlet-body form">
        <!-- BEGIN FORM-->
        <form action="/music/search" class="horizontal-form" method="post">
            <!--/row-->
            <h3 class="form-section">音乐搜索</h3>
            <div class="row-fluid">
                <div class="span2">
                    <div class="control-group">
                        <label class="control-label" for="musicname">歌曲名</label>
                        <div class="controls">
                            <input type="text" id="musicname" class=" span10" name="musicname" >
                        </div>
                    </div>
                </div>
                <!--/span-->
                <div class="span2">
                    <div class="control-group">
                       <label class="control-label" for="singer">歌手</label>
                        <div class="controls">
                            <input type="text" id="singer" class="span10" name="singer">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                        </div>
                    </div>
                </div>
                <div class="span2">
                    <div class="control-group">
                        <label class="control-label">搜索音乐</label>
                        <button type="submit" class="btn blue"><i class="icon-ok"></i>Search</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

@if(@$data)
<span><b>歌曲名：{{$name}} </b></span><br>
    @foreach($data as $d)
        链接：<a href="{{$d}}" target="_blank">点击我</a><br>
    @endforeach
@endif

@endsection
