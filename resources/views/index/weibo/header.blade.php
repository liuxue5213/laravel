<header class="mod-head">
    <div class="mod-head__logo">
        <a href="{{url('/home/'.$sid)}}">
        @if(Session::get('name'))
        <img class="avatar" src="{{asset('/images/'.Session::get('name').'.jpg')}}" alt="" width="26" height="26">
        @else
        <img class="avatar" src="{{asset('/images/JohnScott.jpg')}}" alt="" width="26" height="26">          
        @endif
        </a>
    </div>
    <nav class="mod-head__nav">
        <ul id="menu-%e8%8f%9c%e5%8d%95" class="mod-head__ul">
            @foreach ($nav as $n)
                <li id="menu-item-16" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6">
                <a href="{{ url('/'.$n->slug.'/'.$sid) }}">
                    {{$n->title}}
                </a><span>.</span>
                </li>
            @endforeach

            @if(Auth::guest())
            <li id="menu-item-16" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6">
                <a href="{{url('auth/login')}}">Login</a>
            </li>
            @else
              
                @if($sid!=1)
            <li id="menu-item-16" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6">
                <a href="{{url('/home/'.$sid)}}">MyHome</a><span>.</span>
            </li>
                @endif

            <li id="menu-item-16" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6">
                <a href="{{url('/admin')}}">Admin</a><span>.</span>
            </li>

            <li id="menu-item-16" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6">
                <a href="{{url('auth/logout')}}">logout</a>
            </li>
            @endif

        </ul>   
    </nav>
</header>