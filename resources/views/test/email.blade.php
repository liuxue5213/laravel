@extends('_layout')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">
                    <p>您好：</p>
                    <p>  这是惠付昨天的数据,请查收</p><br>
                      <!-- <img src="{{$message->embed('./email.jpg')}}" width="600" height="480"><br><br> -->
                    <!-- <p class="text-center">Copyright ©2015,JohnScott,All rights reserved 保留所有权利。</p> -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection