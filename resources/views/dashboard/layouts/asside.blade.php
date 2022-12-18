  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="/" class="brand-link mb-4">
          <img src="{{ asset('dash/dist/img/logooo.png') }}" alt="" class="brand-image img-circle elevation-3"
              style="opacity: .8">
          <span class="brand-text font-weight-light">KostJogja</span>
      </a>
      <!-- Sidebar -->
      <div class="sidebar">
          <!-- SidebarSearch Form -->
          <div class="form-inline mb-4">
              <div class="input-group" data-widget="sidebar-search">
                  <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                      aria-label="Search">
                  <div class="input-group-append">
                      <button class="btn btn-sidebar">
                          <i class="fas fa-search fa-fw"></i>
                      </button>
                  </div>
              </div>
          </div>
          <!-- Sidebar user panel (optional) -->
          <a href="/dashboard/profil">
              <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                  <div class="image">
                      <img src="{{ asset('dash/dist/img/magang1.png') }}" class="img-circle elevation-2"
                          alt="User Image">
                  </div>
                  <div class="info">
                      <a href="/dashboard/profil" class="d-block">Kost Jogja</a>
                  </div>
              </div>
          </a>

          <!-- Sidebar Menu -->
          <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                  data-accordion="false">
                  <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                  <li class="nav-item {{ Request::is('dashboard') ? 'menu-open' : '' }}">
                      <a href="{{ route('dashboard.index') }}"
                          class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}">
                          <i class="nav-icon fas fa-tachometer-alt"></i>
                          <p>
                              Dashboard
                          </p>
                      </a>
                  </li>
                  <li class="nav-item {{ Request::is('dashboard/post*') ? 'menu-open' : '' }}">
                      <a href="{{ route('dashboard.posts.index') }}"
                          class="nav-link {{ Request::is('dashboard/post*') ? 'active' : '' }}">
                          <i class="nav-icon fas fa-images"></i>
                          <p>
                              Postingan
                          </p>
                      </a>
                  </li>
                  <li class="nav-item {{ Request::is('dashboard/transaksi*') ? 'menu-open' : '' }}">
                      <a href="/dashboard/transaksi"
                          class="nav-link {{ Request::is('dashboard/transaksi') ? 'active' : '' }}">
                          <i class="nav-icon fas fa-book"></i>
                          <p>
                              Kelola Pesanan
                              <span class="badge badge-danger right">2</span>
                          </p>
                      </a>
                  </li>
                  @can('super_admin')
                      <li class="nav-header">Administrasi</li>
                      <li class="nav-item {{ Request::is('dashboard/categories*') ? 'menu-open' : '' }}">
                          <a href="/dashboard/categories"
                              class="nav-link {{ Request::is('dashboard/categories') ? 'active' : '' }}">
                              <i class="nav-icon far fa-map"></i>
                              <p>
                                  Area
                              </p>
                          </a>
                      </li>
                      <li class="nav-item  {{ Request::is('dashboard/admin*') ? 'menu-open' : '' }}">
                          <a href="{{ route('admin_index-post') }}"
                              class="nav-link {{ Request::is('dashboard/admin') ? 'active' : '' }}">
                              <i class="nav-icon far fa-user"></i>
                              <p>
                                  Pengguna
                              </p>
                          </a>
                      </li>
                  </ul>
              @endcan
          </nav>
          <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
  </aside>
