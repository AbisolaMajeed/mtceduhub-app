  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route('dashboard') }}" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/" class="nav-link">Go back to website</a>
      </li>
    </ul>

  </nav>
  <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="{{ route('dashboard') }}" class="brand-link text-center">
          <img src="{{ asset('assets/img/MTC-EDU-log.png') }}" alt="logo" class="brand-image elevation-3" style="opacity: .8">
          <span class="brand-text font-weight-light">Admin</span>
        </a>
    
        <!-- Sidebar -->
        <div class="sidebar">
    
          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <!-- Add icons to the links using the .nav-icon class
                   with font-awesome or any other icon font library -->
              <li class="nav-item">
                <a href="{{ route('dashboard') }}" class="nav-link  {{ Request::is('dashboard') ? 'active' : '' }}">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Dashboard
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
              </li>

              <li class="nav-header">Applicants</li>
              <li class="nav-item">
                <a href="{{ route('dashboard.applicants') }}" class="nav-link {{ Request::is('dashboard/applicants', 'dashboard/archived-applicants', 'dashboard/add-applicant') ? 'active' : '' }}">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Applicants
                  </p>
                </a>
              </li>
              <li class="nav-header">Courses</li>
              <li class="nav-item">
                <a href="{{ route('dashboard.courses') }}" class="nav-link {{ Request::is('dashboard/courses', 'dashboard/archived-courses', 'dashboard/add-course') ? 'active' : '' }}">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Courses
                  </p>
                </a>
              </li>
              <li class="nav-header">Blogs</li>
              <li class="nav-item">
                <a href="{{ route('dashboard.blogs') }}" class="nav-link {{ Request::is('dashboard/blogs', 'dashboard/archived-blogs', 'dashboard/add-blog') ? 'active' : '' }}">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Blogs
                  </p>
                </a>
              </li>
              <li class="nav-header">Accounts</li>
              <li class="nav-item">
                <a href="{{ route('dashboard.accounts') }}" class="nav-link {{ Request::is('dashboard/accounts', 'dashboard/archived-accounts', 'dashboard/add-accounts') ? 'active' : '' }}">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Admin Accounts
                  </p>
                </a>
              </li>
              <li class="nav-header">Session</li>
              <li class="nav-item">
                <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Logout
                  </p>
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
                </form>

              </li>
            </ul>
          </nav>
          <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
      </aside>