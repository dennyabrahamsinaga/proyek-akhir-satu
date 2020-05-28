<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: #34495e">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard.php?title=Dashboard">
    <div class="sidebar-brand-icon">
      <i class="fas fa-globe-asia"></i>
    </div>
    <div class="sidebar-brand-text mx-2">Admin Pasput</div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Dashboard -->
  <li class="nav-item active">
    <a class="nav-link" href="dashboard.php?title=Dashboard">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Nav Item - Pages Collapse Menu -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
      <i class="fas fa-fw fa-cog"></i>
      <span>Kelola Data</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Kelola Data</h6>
        <div class="dropdown-divider"></div>
        <a class="collapse-item" href="kelola_berita.php?title=Kelola Data Berita"><i class="fas fa-newspaper"></i> Data Berita</a>
        <a class="collapse-item" href="tambah_berita.php?title=Tambah Berita"><i class="fas fa-plus"></i> Tambah Berita</a>
        <div class="dropdown-divider"></div>
        <a class="collapse-item" href="kelola_galeri.php?title=Kelola Data Galeri"><i class="fas fa-image"></i> Data Galeri</a>
        <a class="collapse-item" href="kelola_kategori.php?title=Kelola Data Kategori"><i class="fas fa-file-alt"></i> Data Kategori</a>
        <a class="collapse-item" href="kelola_tag.php?title=Kelola Data Tag"><i class="fas fa-tags"></i></i> Data Tag</a>
      </div>
    </div>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>
<!-- End of Sidebar -->

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

  <!-- Main Content -->
  <div id="content">

    <!-- Topbar -->
    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
      <h6 class="mb-0 text-dark">We <i class="fas fa-heart text-danger"></i> Pasir Putih Parparean</h6>

      <!-- Sidebar Toggle (Topbar) -->
      <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
      </button>

      <!-- Topbar Navbar -->
      <ul class="navbar-nav ml-auto">

        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
        <li class="nav-item dropdown no-arrow d-sm-none">
          <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-search fa-fw"></i>
          </a>
          <!-- Dropdown - Messages -->
          <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
            <form class="form-inline mr-auto w-100 navbar-search">
              <div class="input-group">
                <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                <div class="input-group-append">
                  <button class="btn btn-primary" type="button">
                    <i class="fas fa-search fa-sm"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </li>



        <div class="topbar-divider d-none d-sm-block"></div>

        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['username'] ?></span>
            <i class="fas fa-user" style="color:red"></i>
          </a>
          <!-- Dropdown - User Information -->
          <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="data_admin.php">
              <i class="fas fa-user fa-sm fa-fw mr-2 text-danger-400"></i>
              Profile
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="logout.php" onclick="return confirm('Anda yakin ingin keluar?')">
              <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-danger-400"></i>
              Logout
            </a>
          </div>
        </li>

      </ul>

    </nav>