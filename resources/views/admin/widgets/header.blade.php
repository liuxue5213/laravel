<div class="header navbar navbar-inverse navbar-fixed-top">
  <!-- BEGIN TOP NAVIGATION BAR -->
  <div class="navbar-inner">
    <div class="container-fluid">
      <!-- BEGIN LOGO -->
      <a class="brand" href="#">
      <img src="{{asset('/media/image/logo.png')}}" alt="logo"/>
      </a>
      <!-- END LOGO -->

      <!-- BEGIN RESPONSIVE MENU TOGGLER -->
      <a href="javascript:;" class="btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse">
      <img src="{{asset('/media/image/menu-toggler.png')}}" alt=""/>
      </a>
      <!-- END RESPONSIVE MENU TOGGLER -->

      <ul class="nav pull-right">
        <li class="dropdown" id="header_inbox_bar">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <i class="icon-envelope"></i>
          <span class="badge">5</span>
          </a>
          <ul class="dropdown-menu extended inbox">
            <li>
              <p>You have 12 new messages</p>
            </li>
            <li>
              <a href="{{url('/admin/email')}}">
              <span class="photo"><img src="{{ asset('/media/image/avatar2.jpg')}}" alt="" /></span>
              <span class="subject">
              <span class="from">Lisa Wong</span>
              <span class="time">Just Now</span>
              </span>
              <span class="message">
              Vivamus sed auctor nibh congue nibh. auctor nibh auctor nibh...
              </span>
              </a>
            </li>

            <li class="external">
              <a href="{{url('/admin/email/show')}}">See all messages <i class="m-icon-swapright"></i></a>
            </li>
          </ul>
        </li>
        <!-- END INBOX DROPDOWN -->

        <!-- BEGIN USER LOGIN DROPDOWN -->
        <li class="dropdown user">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <img alt="" src="{{asset('/media/image/johnscott.png')}}" />
          <span class="username">{{Session::get('name')}}</span>
          <i class="icon-angle-down"></i>
          </a>
          <ul class="dropdown-menu">
            <li><a href="{{url('/admin/about')}}"><i class="icon-user"></i>个人信息</a></li>
            <!-- <li><a href="{{url('/admin/about')}}"><i class="icon-calendar"></i>日历</a></li> -->
            <li><a href="{{url('/admin/email')}}"><i class="icon-envelope"></i>收件箱</a></li>
            <li class="divider"></li>
            <li><a href="{{url('auth/logout')}}"><i class="icon-key"></i>退出</a></li>
          </ul>
        </li>
        <!-- END USER LOGIN DROPDOWN -->
      </ul>
      <!-- END TOP NAVIGATION MENU -->
    </div>
  </div>
</div>
