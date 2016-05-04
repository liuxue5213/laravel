@extends('layout._index')

@section('title')
    @foreach ($info as $i) 
        {{$i->title}}
    @endforeach
@endsection

@section('head_css')
<link href="{{ asset('/css/home.css') }}" rel="stylesheet" type="text/css"/>
@endsection

@section('content')   
        <div class="willerce">
            <img class="avatar" src="{{ asset('/images/logo.jpg') }}" alt="" width="128" height="128">

            @foreach ($info as $i)
                <h1>{{$i->title}}</h1>
                <p>Work @ {{$i->company}}, <br>
                    {{$i->jobs}}. More <a href="{{url('/about/'.$sid)}}">About Me</a> 
                </p>
                <p style="height: 24px; line-height: 24px; margin: 15px 0;">
                    <img style="vertical-align: bottom; margin-right: 10px;" src=" {{ asset('/images/address.png') }}">{{$i->city}} . {{$i->country}}
                </p>
            @endforeach

            <p class="nav">
                @foreach ($nav as $n)
                    <a href="{{ url('/'.$n->slug.'/'.$user_id) }}">
                    @if($sid==$user_id)<span>My</span>@endif
                    {{$n->title}}
                    </a>
                @endforeach

                @if (Auth::guest())
                    <a href="{{url('auth/login')}}">Login</a>
                @else
                    @if($sid!=$user_id)
            <a href="{{url('/home/'.$sid)}}">My Home</a>
                    @else
                <a href="{{url('/admin')}}">Admin</a>
                    @endif
                    <a href="{{url('auth/logout')}}">logout</a>
                @endif
            </p>

        </div>
@endsection




