<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
    
      <div class="app-sidebar__user">
      <img class="app-sidebar__user-avatar" style="margin-top:-1rem;max-width:50px" src="{{URL('public/admin/logo1.png')}}"   alt="User Image">
         <b>Panel</b>
      </div>

 
      <ul class="app-menu">

        @can('admin')
           <li><a class="app-menu__item" href="{{route('admin.dashboard')}}"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
        @endcan


   
        {{-- <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-users"></i><span class="app-menu__label">Menu Name</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="#">
                <i class="icon fa fa-circle-o"></i>Item 1</a></li>
          </ul>
        </li> --}}

        </li>
      
      
      </ul>
    </aside>