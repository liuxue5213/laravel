<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <meta name="renderer" content="webkit">
    <title>@yield('title')</title>
    <!-- Bootstrap -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/docs.min.css" rel="stylesheet">

</head>
<body>
<div class="container"><!--固定布局有15px边距-->
    @yield('content')
</div>
<div class="container-fluid"><!--流动布局有15px边距-->
    @yield('content-fluid')
</div>
<div class="layout"><!--在各自页面自定义.layout，占满全屏-->
    @yield('layout')
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="/js/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="/js/bootstrap.min.js"></script>
<!-- Include the Datetime picker -->
 @yield('manual_script')
</body>
</html>