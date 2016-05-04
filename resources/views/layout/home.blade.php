@extends('layout._index')

@section('title')
    JohnScott1989
@endsection

@section('head_css')
<link href="{{ asset('/css/home.css')}}" rel="stylesheet" type="text/css"/>
@endsection

@section('content')
 <div class="willerce">
    <img class="avatar" src="{{ asset('/images/logo.jpg')}}" alt="" width="128" height="128">
    <h1>JohnScott1989</h1>
    <p>Work @ Beijing DataComx Science and Technology, <br>PHP Programming Team. More <a href="{{url('/about/'.$user_id)}}">About Me</a> </p>
    <p style="height: 24px; line-height: 24px; margin: 15px 0;">
        <img style="vertical-align: bottom; margin-right: 10px;" src="{{ asset('/images/address.png')}}">Beijing . China
    </p>
    <p class="nav">
    @foreach ($nav as $n)
        <a href="{{ url('/'.$n->slug.'/1') }}">{{$n->title}}</a>
    @endforeach
        @if (Auth::guest())
            <a href="{{url('auth/login')}}">Login</a>
        @else
            @if($sid != $user_id)
        <a href="{{url('/home/'.$sid )}}">My Home</a>
            @else
        <a href="{{url('/admin')}}">Admin</a>
        @endif
        <a href="{{url('auth/logout')}}">logout</a>
    @endif
    </p>
</div>
@endsection
