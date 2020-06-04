<div class="sidebar">

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-circle"></i>
                <p>
                  User Management
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                <a href="{{ route('user.create') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Create User</p>
                  </a>
                </li>
                <li class="nav-item">
                <a href="{{ route('user.list') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>List User</p>
                  </a>
                </li>
              </ul>
            </li> 
     
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-circle"></i>
                <p>
                  Inventory
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                <a href="{{ route('inventory.create') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add Item</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('inventory.list') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>List Item</p>
                  </a>
                </li>
              </ul>
            </li> 
     
     
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-circle"></i>
                <p>
                  Report
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>User Report</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Inventory Report</p>
                  </a>
                </li>
              </ul>
            </li> 
     
          
          </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>