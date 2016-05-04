@extends('layout._index')

@section('title')
    {{Session::get('name')}}'s Blog
@endsection

@section('head_css')
    <link href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://www.wpke.net/wp-content/themes/abctheme/style.css" media="screen" type="text/css">
    <script type="text/javascript" src="https://www.wpke.net/wp-content/themes/abctheme/js/jquery.js"></script>
@endsection

@section('content')
    <!--  导航栏  -->
    @include('index.weibo.header')

    <article class="mod-archive">
        <div class="mod-archive__item">

        <div id="2015" class="mod-archive__year">2016</div>
    
        <ul class="mod-archive__list">
            @foreach($blog as $b)
            <li>
                <time class="mod-archive__time" datetime="{{$b->updated_at}}">{{$b->updated_at}}</time> 
                <span>—</span>
                <a href="{{url('/weibo/show/'.$b->id)}}" title="{{$b->post_title}}">{{$b->post_title}}</a>
            </li>
            @endforeach
        </ul>

        </div>
    </article>

    {!! $blog->render() !!}

    @include('layout.footer')
@endsection
