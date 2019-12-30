<header class="app-header app_menu"><a class="app-header__logo" href="#"></a>
    <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar">
        <span class="quick-med" style="margin-top:1rem;margin-left:3rem"><h4 style="display:inline"> @yield('topheader') </h4 ></span>
    </a>
    <!-- Navbar Right Menu-->
  
    <li class="app-search">
        <form action="{{route('admin.order.search')}}" >
           <input class="app-search__input" name="str" type="search" placeholder="Search">
           <button class="app-search__button"><i class="fa fa-search"></i></button>
        </form>
      </li>

    <ul class="app-nav">
      
  

     
      <!--Notification Menu-->
      <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Show notifications"><i class="fa fa-bell-o fa-lg"></i></a>
      
      </li>
      <!-- User Menu-->
      <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
        <ul class="dropdown-menu settings-menu dropdown-menu-right">
         
          <li><a class="dropdown-item" href="{{route('logout')}}"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
        </ul>
      </li>
    </ul>
  </header>