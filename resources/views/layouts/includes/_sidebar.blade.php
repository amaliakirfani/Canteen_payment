<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <!-- <img src="{{asset('images/favicon.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
      <span class="brand-text font-weight-light">Pembayaran Kantin</span>
    </a>
    <!-- Sidebar -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li>
            <a href="/dashboard" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p> Dashboard </p>
            </a>
          </li>

          <li class="nav-item has-treeview menu-open">
            <a href="/school" class="nav-link active">
              <i class="nav-icon fas fa-edit"></i>
              <p>
              Daftar Menu
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="nav-icon fas fa-edit"></i>
              <p>
               Orders
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right"></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/new_order" class="nav-link">
                  <i class="far fa-id-card"></i>
                  <p>New Order</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="/list_order" class="nav-link">
                <i class="far fa-id-card"></i>
                  <p>List Order</p>
                </a>
              </li>
              <li class="nav-item">
            </ul>
          <!-- menu school -->

          <li class="nav-item has-treeview menu-open">
            <a href="/users" class="nav-link active">
            <i class="nav-icon fas fa-user-edit"></i>
              <p>
                Users
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
          </li>

	     </nav>      <!-- /.sidebar-menu -->
    </div>    <!-- /.sidebar -->
  </aside>