@extends('layout._index')

@section('title')
    blog
@endsection

@section('head_css')
    <link rel="stylesheet" href="https://www.wpke.net/wp-content/themes/abctheme/style.css" media="screen" type="text/css">
    <link href="https://www.wpke.net/wp-content/themes/abctheme/images/favicon.ico" rel="icon">
    <script type="text/javascript" src="https://www.wpke.net/wp-content/themes/abctheme/js/jquery.js"></script>
@endsection

@section('content')
    <!--  导航栏  -->
    @include('index.weibo.header')



<article class="mod-post mod-post__type-post">
@foreach($blog as $b)
    <header>
        <h1 class="mod-post__title">{{$b->post_title}}</h1>
    </header>
    <div class="mod-post__entry wzulli">
        <div id="biaoti">
            <span>{!! $b->post_content !!}</span>
        </div>
    </div><br>

    <div class="mod-post__meta">
        <div>
            <div>
                <time datetime="{{$b->updated_at}}">{{$b->updated_at}}</time>
                @if(!Session::get('name')) 
                <span>----JohnScott</span> 
                @else
                <span>----{{Session::get('name')}}</span>
                @endif
            </div>
      <!--       <div>— 文内使用到的标签：
                <span class="mod_tag">
                    <a href="https://www.wpke.net/tag/nginx" rel="tag">Nginx</a>
                </span>
            </div> -->
        </div>
    </div>
@endforeach
</article>


            <div class="navigation">
                <div class="alignleft"></div>
                <div class="alignright"></div>
            </div>

            <div id="respond">
                <h3>发表评论</h3>
                <div id="cancel-comment-reply">
                    <small><a rel="nofollow" id="cancel-comment-reply-link" href="https://www.wpke.net/black-technology/139.html#respond" style="display:none;">点击这里取消回复。</a></small>
                </div>
                <form action="https://www.wpke.net/wp-comments-post.php" method="post" id="commentform">
                    <p><input type="text" name="author" id="author" value="" size="22" tabindex="1" aria-required="true">
                    <label for="author"><small>姓名 (必填)</small></label></p>
                    <p><input type="text" name="email" id="email" value="" size="22" tabindex="2" aria-required="true">
                    <label for="email"><small>电子邮件（不会被公开） (必填)</small></label></p>
                    <p><input type="text" name="url" id="url" value="" size="22" tabindex="3">
                    <label for="url"><small>站点</small></label></p>
                    <!--<p><small><strong>XHTML：</strong>您可使用下列标签：<code>&lt;a href=&quot;&quot; title=&quot;&quot;&gt; &lt;abbr title=&quot;&quot;&gt; &lt;acronym title=&quot;&quot;&gt; &lt;b&gt; &lt;blockquote cite=&quot;&quot;&gt; &lt;cite&gt; &lt;code&gt; &lt;del datetime=&quot;&quot;&gt; &lt;em&gt; &lt;i&gt; &lt;q cite=&quot;&quot;&gt; &lt;s&gt; &lt;strike&gt; &lt;strong&gt; </code></small></p>-->
                    <p><textarea name="comment" id="comment" cols="58" rows="10" tabindex="4"></textarea></p>
                    <p><input name="submit" type="submit" id="submit" tabindex="5" value="发表评论">
                    <input type="hidden" name="comment_post_ID" value="139" id="comment_post_ID">
                    <input type="hidden" name="comment_parent" id="comment_parent" value="0">
                    </p>
                </form>
            </div>
        </section>
   

    @include('layout.footer')
@endsection
