  <!-- Sidebar -->
  <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
          <div class="sidebar-brand-icon rotate-n-15">
              <i class="fas fa-laugh-wink"></i>
          </div>
          <div class="sidebar-brand-text mx-3">Admin</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
          <a class="nav-link" href="index.html">
              <i class="fas fa-fw fa-tachometer-alt"></i>
              <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
          Management
      </div>    

      <!-- Product Management -->
      <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#product" aria-expanded="true" aria-controls="product">
              <i class="fas fa-fw fa-cog"></i>
              <span>Produk</span>
          </a>
          <div id="product" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">
                  <a class="collapse-item" href="{{ route('product.index') }}">Daftar Produk</a>
                  <a class="collapse-item" href="{{ route('category.index') }}">Kategori</a>
              </div>
          </div>
      </li>

      <!-- Order Management -->
      <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#order" aria-expanded="true" aria-controls="order">
              <i class="fas fa-fw fa-wrench"></i>
              <span>Order</span>
          </a>
          <div id="order" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">
                  <a class="collapse-item" href="utilities-color.html">Colors</a>
                  <a class="collapse-item" href="utilities-border.html">Borders</a>
                  <a class="collapse-item" href="utilities-animation.html">Animations</a>
                  <a class="collapse-item" href="utilities-other.html">Other</a>
              </div>
          </div>
      </li>

       <!-- User maangement -->
      <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#user" aria-expanded="true" aria-controls="user">
              <i class="fas fa-fw fa-user-alt"></i>
              <span>User</span>
          </a>
          <div id="user" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">
                  <a class="collapse-item" href="{{ route('user.index') }}">Daftar User</a>
              </div>
          </div>
      </li>

  </ul>
  <!-- End of Sidebar -->