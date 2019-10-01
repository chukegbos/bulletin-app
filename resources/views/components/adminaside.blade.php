<aside class="main-sidebar">
        <!-- sidebar -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
        		<div class="ulogo">
              <h3 style="color:white">Admin</h3>
        		</div>          
          </div>
          <!-- sidebar menu -->
     
          <ul class="sidebar-menu" data-widget="tree">
    		    <li class="nav-devider"></li>
            
            <li class="active">
              <a href="{{ url('/admin/index') }}">
                <i class="fa fa-home"></i> <span>Dashboard</span>
              </a>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-plus"></i> <span>Settings</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-right pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ url('/admin/admin') }}"><i class="fa fa-circle-o"></i>Admins</a></li>
              
                <li><a href="{{ url('/admin/setting') }}"><i class="fa fa-circle-o"></i>Site Settings</a></li>               
                <!--<li><a href="{{ url('/admin/slider') }}"><i class="fa fa-circle-o"></i>Sliders</a></li>-->

              </ul>
            </li>

            <li class="active">
              <a href="{{ url('/admin/board') }}">
                <i class="fa fa-plus"></i> <span>Team</span>
              </a>
            </li>-->

            <li class="treeview">
              <a href="#">
                <i class="fa fa-plus"></i> <span>Events</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-right pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ url('/admin/newevent') }}"><i class="fa fa-circle-o"></i>Add Event</a></li>
                <li><a href="{{ url('/admin/allevent') }}"><i class="fa fa-circle-o"></i>All Events</a></li>
              </ul>
            </li>

            <!--<li class="active">
              <a href="{{ url('/admin/management') }}">
                <i class="fa fa-plus"></i> <span>Management</span>
              </a>
            </li>-->

            <li class="active">
              <a href="{{ url('/admin/gallery') }}">
                <i class="fa fa-plus"></i> <span>Gallery</span>
              </a>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-plus"></i> <span>Publications/Post</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-right pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ url('/admin/newpost') }}"><i class="fa fa-circle-o"></i>Add</a></li>
                <li><a href="{{ url('/admin/allpost') }}"><i class="fa fa-circle-o"></i>View all</a></li>
                <li><a href="{{ url('/admin/category') }}"><i class="fa fa-circle-o"></i> Categories</a></li>
                <!--<li><a href="{{ url('/admin/tag') }}"><i class="fa fa-circle-o"></i> Tags</a></li>-->
              </ul>
            </li>

            <!--<li class="treeview">
              <a href="#">
                <i class="fa fa-plus"></i> <span>Event</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-right pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                
                <li><a href="{{ url('/admin/newevent') }}"><i class="fa fa-circle-o"></i> Create  Events</a></li>
                <li><a href="{{ url('/admin/allevent') }}"><i class="fa fa-circle-o"></i>Events</a></li>               
              </ul>
            </li>-->

            <li>
              <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="fa fa-sign-out"></i> Logout</span>
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
              </form>
            </li>
          </ul>
        </section>
      </aside>  