 <!-- BEGIN SIDEBAR -->
  <div class="page-sidebar nav-collapse collapse">
    <!-- BEGIN SIDEBAR MENU -->
    <ul class="page-sidebar-menu">
      <li>
        <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
        <div class="sidebar-toggler hidden-phone"></div>
        <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
      </li>

      <li>
        <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
        <form class="sidebar-search" action="" method="get">
          <div class="input-box">
            <a href="javascript:;" class="remove"></a>
            <input type="text" placeholder="查找..." />
            <input type="button" class="submit" value=" " />
          </div>
        </form>
        <!-- END RESPONSIVE QUICK SEARCH FORM -->
      </li>





      <li id="nav_index" class="">
        <a href="{{url('/admin')}}">
        <i class="icon-home"></i>
        <span >控制台</span>
        <span class="selected"></span>
        </a>
      </li>

    @foreach($nav as $n)
      <li id="'nav_'.{{$n->slug}}" class="last ">
        <a href="{{url('/admin/'.$n->slug)}}">
        <i class="{{$n->class}}"></i>
        <span class="title">{{$n->name}}</span>
        </a>
      </li>
    @endforeach

     <li class="">
        <a href="javascript:;">
        <i class="icon-cogs"></i>
        <span class="title">设置</span>
        <span class="arrow "></span>
        </a>
        <ul class="sub-menu">
          <li >
            <a href="{{url('/admin/about')}}">个人信息</a>
          </li>
          <li >
            <a href="{{url('/admin/setting')}}">系统设置</a>
          </li>
        </ul>
      </li>

    </ul>
    <!-- END SIDEBAR MENU -->
  </div>
  <!-- END SIDEBAR -->