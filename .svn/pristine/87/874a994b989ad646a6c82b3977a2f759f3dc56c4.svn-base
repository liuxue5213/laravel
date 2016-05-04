@extends('layout._index')

@section('title')
	About Me
@endsection

@section('head_css')
    <link href="{{ asset('/css/about.css') }}" rel="stylesheet">
@endsection

@section('content')
<header class="mod-head">
    <h1 class="mod-head__title">
        <a href="#">Johnscott1989</a>
    </h1>
    <div class="mod-head__logo">
        <a href="">
            <img class="avatar" src="{{ asset('/images/logo.jpg') }}" alt="" width="26" height="26">
        </a>
    </div>
    <nav class="mod-head__nav">

    <ul id="menu-%e8%8f%9c%e5%8d%95" class="mod-head__ul">
    @foreach($nav as $n)
        <li id="menu-item-6" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6">
        <a href="{{url('/'.$n->slug)}}">{{$n->title}}</a>
        <span>·</span>
        </li>
    @endforeach
        <li id="menu-item-6" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6">
        <a href="{{url('/auth/login')}}">Login</a>
        </li>
    </ul>   
    </nav>
</header>

<article class="mod-post mod-post__type-page">
    <header>
        <h1 class="mod-post__title">About</h1>
    </header>
        <div class="mod-post__entry">
      
        @foreach($info as $i)
        <p>{{$i->content}}</p>
        <h3 id="ABOUT_HERE"></h3>
        <h2 class="mod-post__title">Contact Me</h2>
        <p>微信号：{{$i->weixin_no}}   
            <a target='_blank' href="#">获取二维码</a>
        </p>
        <p>新浪微博：{{$i->weibo}}</p>
        <p>个人博客：{{$i->blog}}</p>
        <p>Email：{{$i->main_email}}</p>

        @endforeach
        <p><img alt="Desktop" class="size-full wp-image-90 aligncenter" src="{{ asset('/images/about.jpg')}}" width="866" height="577"></p>
    </div>
</article>

@include('layout.footer')

@endsection
