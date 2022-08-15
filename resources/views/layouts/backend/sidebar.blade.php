<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="" class="brand-link">
    <img src="{{ asset('templates/backend/AdminLTE-3.1.0') }}/dist/img/SD.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">SPP SD Batu Bara</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="my-auto ml-3">
        <i class="nav-icon fas fa-user-circle fa-2x text-light"></i>
      </div>
      <div class="info">
        <a href="javascript:void(0)" class="d-block">{{ Auth::user()->username }}</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        @role('admin')
        <li class="nav-item">
          <a href="{{ route('dashboard.index') }}" class="nav-link {{ Request::segment(2) == 'dashboard' ? 'active' : '' }}">
            <i class="fa-solid fa-gauge"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/home" class="nav-link {{ Request::segment(1) == 'home' ? 'active' : '' }}">
            <i class="fa-solid fa-house"></i>
            <p>
              Home
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('berita.index') }}" class="nav-link {{ Request::segment(2) == 'berita' ? 'active' : '' }}">
            <i class="fa-solid fa-file-circle-plus"></i>
            <p class="feat-btn">
              Berita
            </p>
          </a>
        </li>
        {{-- <li class="nav-item">
          <a href="{{ route('kategori.index') }}" class="nav-link {{ Request::segment(1) == 'kategori' ? 'active' : '' }}">
            <i class="fa-solid fa-house"></i>
            <p>
              Kategori
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('home.index') }}" class="nav-link {{ Request::segment(1) == 'home' ? 'active' : '' }}">
            <i class="fa-solid fa-house"></i>
            <p>
              Tag
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('home.index') }}" class="nav-link {{ Request::segment(1) == 'home' ? 'active' : '' }}">
            <i class="fa-solid fa-house"></i>
            <p>
              Banner
            </p>
          </a>
        </li> --}}
        @endrole
        
        @role('petugas')
        <li class="nav-item">
          <a href="{{ route('home.index') }}" class="nav-link {{ Request::segment(1) == 'home' ? 'active' : '' }}">
            <i class="fa-solid fa-house"></i>
            <p>
              Home
            </p>
          </a>
        </li>
        @elserole('siswa')
        <li class="nav-item">
          <a href="{{ route('home.index') }}" class="nav-link {{ Request::segment(1) == 'home' ? 'active' : '' }}">
            <i class="fa-solid fa-house"></i>
            <p>
              Home
            </p>
          </a>
        </li>
        @endrole
        
        @role('admin')
        <li class="nav-header">DATA MANAGEMENT</li>
        <li class="nav-item">
          <a href="{{ route('siswa.index') }}" class="nav-link {{ Request::segment(2) == 'siswa' ? 'active' : '' }}">
            <i class="fa-solid fa-children"></i>
            <p>
              Siswa
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="{{ route('kelas.index') }}" class="nav-link {{ Request::segment(2) == 'kelas' ? 'active' : '' }}">
            <i class="fa-solid fa-school"></i>
            <p>
              Kelas
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="{{ route('user.index') }}" class="nav-link {{ Request::segment(2) == 'user' ? 'active' : '' }}">
            <i class="fa-solid fa-people-group"></i>
            <p>
              User
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="{{ route('admin-list.index') }}" class="nav-link {{ Request::segment(2) == 'admin-list' ? 'active' : '' }}">
            <i class="fa-solid fa-book-open-reader"></i>
            <p>
              Admin
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="{{ route('petugas.index') }}" class="nav-link {{ Request::segment(2) == 'petugas' ? 'active' : '' }}">
            <i class="fa-solid fa-user"></i>
            <p>
              Petugas
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="{{ route('spp.index') }}" class="nav-link {{ Request::segment(2) == 'spp' ? 'active' : '' }}">
            <i class="fa-solid fa-coins"></i>
            <p>
              SPP
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="{{ route('pembayaran-spp.index') }}" class="nav-link {{ Request::segment(2) == 'pembayaran-spp' ? 'active' : '' }}">
            <i class="fa-solid fa-clipboard-list"></i>
            <p>
              Pembayaran
            </p>
          </a>
        </li>
        @endrole
        
        @role('petugas')
        <li class="nav-header">DATA MANAGEMENT</li>
        <li class="nav-item">
          <a href="{{ route('siswa.index') }}" class="nav-link {{ Request::segment(2) == 'siswa' ? 'active' : '' }}">
            <i class="fa-solid fa-children"></i>
            <p>
              Siswa
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="{{ route('kelas.index') }}" class="nav-link {{ Request::segment(2) == 'kelas' ? 'active' : '' }}">
            <i class="fa-solid fa-school"></i>
            <p>
              Kelas
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="{{ route('spp.index') }}" class="nav-link {{ Request::segment(2) == 'spp' ? 'active' : '' }}">
            <i class="fa-solid fa-coins"></i>
            <p>
              SPP
            </p>
          </a>
        </li>
        
        <li class="nav-item">
          <a href="{{ route('pembayaran-spp.index') }}" class="nav-link {{ Request::segment(2) == 'pembayaran-spp' ? 'active' : '' }}">
            <i class="fa-solid fa-clipboard-list"></i>
            <p>
              Pembayaran
            </p>
          </a>
        </li>
        @endrole

        @role('admin|petugas')
        <li class="nav-header">PAYMENT</li>
        <li class="nav-item">
          <a href="{{ route('pembayaran.index') }}" class="nav-link {{ Request::segment(2) == 'bayar' ? 'active' : '' }}">
            <i class="fa-solid fa-money-bill-wave"></i>
            <p>
              Pembayaran
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('pembayaran.status-pembayaran') }}" class="nav-link {{ Request::segment(2) == 'status-pembayaran' ? 'active' : '' }}">
            <i class="fa-solid fa-money-check"></i>
            <p>
              Status Pembayaran
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('pembayaran.history-pembayaran') }}" class="nav-link {{ Request::segment(2) == 'history-pembayaran' ? 'active' : '' }}">
            <i class="fa-solid fa-file-medical"></i>
            <p>
              History Pembayaran
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('pembayaran.laporan') }}" class="nav-link {{ Request::segment(2) == 'laporan' ? 'active' : '' }}">
            <i class="fa-solid fa-file-circle-check"></i>
            <p>
              Laporan Pembayaran
            </p>
          </a>
        </li>
        @endrole
        
        @role('siswa')
        <li class="nav-header">PAYMENT</li>
        <li class="nav-item">
          <a href="{{ route('siswa.pembayaran-spp') }}" class="nav-link {{ Request::segment(2) == 'pembayaran-spp' ? 'active' : '' }}">
            <i class="fa-solid fa-money-bill-wave"></i>
            <p>
              Pembayaran
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('siswa.history-pembayaran') }}" class="nav-link {{ Request::is('siswa/history-pembayaran') ? 'active' : '' }}">
            <i class="fa-solid fa-file-medical"></i>
            <p>
              History Pembayaran
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('siswa.laporan-pembayaran') }}" class="nav-link {{ Request::is('siswa/laporan-pembayaran') ? 'active' : '' }}">
            <i class="fa-solid fa-file-circle-check"></i>
            <p>
              Laporan Pembayaran
            </p>
          </a>
        </li>
        @endrole

        @role('admin')
        <li class="nav-header">ROLES - PERMISSIONS</li>
        <li class="nav-item">
          <a href="{{ route('roles.index') }}" class="nav-link {{ Request::segment(2) == 'roles' ? 'active' : '' }}">
            <i class="fa-solid fa-person-circle-exclamation"></i>
            <p>
              Roles List
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('permissions.index') }}" class="nav-link {{ Request::segment(2) == 'permissions' ? 'active' : '' }}">
            <i class="fa-solid fa-gamepad"></i>
            <p>
              Permissions List
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('role-permission.index') }}" 
          class="nav-link {{ Request::segment(2) == 'role-permission' ? 'active' : '' }}">
            <i class="fa-solid fa-circle-check"></i>
            <p>
              Role - Permission
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('user-role.index') }}" 
          class="nav-link {{ Request::segment(2) == 'user-role' ? 'active' : '' }}">
            <i class="fa-solid fa-circle-check"></i>
            <p>
              User - Role
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('user-permission.index') }}" 
          class="nav-link {{ Request::segment(2) == 'user-permission' ? 'active' : '' }}">
            <i class="fa-solid fa-circle-check"></i>
            <p>
              User - Permission
            </p>
          </a>
        </li>
        @endrole
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
<script>
</script>