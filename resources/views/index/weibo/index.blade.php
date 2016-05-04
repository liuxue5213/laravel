@extends('layout._index')

@section('title')
    weibo
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
    <div class="mod-post__entry">
      <h1>微博待开放  博客请点 <a href="{{url('/weibo/show/')}}">'这里'</a></h1>
    </div>
</article>

@include('layout.footer')

@endsection

