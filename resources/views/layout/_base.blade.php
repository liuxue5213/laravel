@section('hacker_header')
@show{{-- 头部申明区域 --}}

<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="renderer" content="webkit">
    {{-- 360浏览器使用webkit内核渲染页面 --}}
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    
    <title>
    @section('title') 主页@show{{-- 页面标题 --}}
    </title>

    @section('meta')
    @show{{-- 添加一些额外的META申明 --}}

    @section('head_css')
    @show{{-- head区域css样式表 --}}

    @section('head_js')
    @show{{-- head区域javscript脚本 --}}

    <link rel="shortcut icon" href="./favicon.ico">
</head>
<body @section('body_attr')class=""@show>
    @section('beforeBody')
    @show{{--在正文之后填充一些东西 --}}

    @section('body')
    @show{{-- 正文部分 --}}

    @section('afterBody')
    @show
</body>
</html>

@section('hacker_footer')
@show{{-- 尾部申明区域 --}}
