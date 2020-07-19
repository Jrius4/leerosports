
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="{{url('/')}}" class="brand-link" target="_blanck">
          <img width="50" width="50" src="{{asset('img/logos/ndebi-tech-favi-blue.png')}}" alt="ndebitech Logo" class="brand-image img-circle elevation-3"
               style="opacity: .8">
          <span class="brand-text font-weight-light">LEEROSPORTS</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
              <img src="{{ Auth::user()->gravatar() }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
              <a href="#" class="d-block">{{ Auth::user()->name }}</a>
            </div>
          </div>

          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <!-- Add icons to the links using the .nav-icon class
                   with font-awesome or any other icon font library -->

              <li class="nav-item has-treeview menu-open">
                <a href="#" class="nav-link active">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Dashboard
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                  <a href="{{url('/home')}}" class="nav-link active">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Dashboard</p>
                    </a>
                  </li>
                </ul>
              </li>


              @if (check_user_permissions(request(), "Users@index"))
                <li class="nav-item">
                  <a href="{{ route('backend.users.index') }}" class="nav-link">
                    <i class="fa fa-users nav-icon"></i>
                    <p>Users</p>
                  </a>
                </li>
              @endif


              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-th"></i>
                  <p>
                    Blogs
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ route('backend.blog.index') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>All Posts</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('backend.blog.create') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Add New Post</p>
                    </a>
                  </li>
                  @if (check_user_permissions(request(), "Categories@index"))
                  <li class="nav-item">
                    <a href="{{route('backend.categories.index')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Post Categories</p>
                    </a>
                  </li>
                  @endif


                </ul>
              </li>


              <li class="nav-item has-treeview">
                  <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-th"></i>
                    <p>
                      Services
                      <i class="fas fa-angle-left right"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="{{ route('backend.services.index') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>All Services</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="{{ route('backend.services.create') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Add New Service</p>
                      </a>
                    </li>

                    <li class="nav-item">
                      <a href="{{route('backend.service-categories.index')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Service Categories</p>
                      </a>
                    </li>



                  </ul>
                </li>


                <li class="nav-item has-treeview">
                  <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-th"></i>
                    <p>
                      Process
                      <i class="fas fa-angle-left right"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="{{ route('backend.system-processes.index') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>All Processes</p>
                      </a>
                    </li>
                  </ul>
                </li>


              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-th"></i>
                  <p>
                    Projects
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ route('backend.projects.index') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>All Projects</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('backend.projects.create') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Add New Project</p>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a href="{{route('backend.project-categories.index')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Project Categories</p>
                    </a>
                  </li>



                </ul>
              </li>



              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-th"></i>
                  <p>
                    Careers
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ route('backend.careers.index') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>All Careers</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('backend.careers.create') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Add New Career</p>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a href="{{route('backend.career-categories.index')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Career Categories</p>
                    </a>
                  </li>



                </ul>
              </li>




              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-th"></i>
                  <p>
                    Client Testimonies
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ route('backend.client-testimonies.index') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>All Client Testimonies</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('backend.client-testimonies.create') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Add New Client Testimony</p>
                    </a>
                  </li>


                </ul>
              </li>






              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-th"></i>
                  <p>
                    Field Industry
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ route('backend.field-industries.index') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>All Fields</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('backend.field-industries.create') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Add New Field</p>
                    </a>
                  </li>



                </ul>
              </li>






              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-th"></i>
                  <p>
                    Quote Requests
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ route('backend.quote-requests.index') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>All Requests</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('backend.quote-requests.create') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Add New Request</p>
                    </a>
                  </li>




                </ul>
              </li>






              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-th"></i>
                  <p>
                    Clients
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ route('backend.ndebi-tech-clients.index') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>All Clients</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('backend.ndebi-tech-clients.create') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Add New Client</p>
                    </a>
                  </li>



                </ul>
              </li>







            </ul>
          </nav>
          <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
      </aside>

