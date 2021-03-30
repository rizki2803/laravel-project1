  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a href="https://hariff.co.id/" class="brand-link">
      <img src="{{asset('img')}}/HariffLogo1.jpeg" alt="Pt.HariffDTE Logo" class="brand-image img-circle elevation-3" >
      <span class="brand-text font-weight-light">PT. Hariff DTE</span>
    </a>

    <!-- Sidebar -->

    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('assets')}}/dist/img/avatar5.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{route('gm_get')}}" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
              <p>
                Table Guest
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('gc_get')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Table Guest Category
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper body">
     @yield('content')
    </div>
    <footer class="main-footer text-sm">
        <strong>Copyright &copy; 2021 <a href="https://hariff.co.id/">PT. Hariff DTE</a>.</strong> All rights reserved.
    </footer>
