<!DOCTYPE html>
<html>
    <head>
        <title>404</title>
        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
       
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Error.404</div>
             
                <img src="/images/404.jpg" alt="404" width="420" />
            </div>
            <span id="totalSecond">3</span>秒后自动返回首页
        </div>
        <script language="javascript" type="text/javascript">
            var second = document.getElementById('totalSecond').innerText;
            setInterval("redirect()", 1000); //每1秒钟调用redirect()方法一次
            function redirect() {
                if (second < 0) {
                    location.href = '{{url('/')}}';
                } else{
                    document.getElementById('totalSecond').innerText = second--;
                }
            }
        </script>
    </body>
</html>


