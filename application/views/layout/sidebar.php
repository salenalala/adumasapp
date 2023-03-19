<!-- Main Sidebar Container -->
<aside style="background-color: blue;" class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <span class="brand-text font-weight-dark">Pengaduan Masyarakat</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <h4 style="color: white;"><?php echo $this->session->userdata('ses_nama');?></h4>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <!-- <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <li class="nav-item">
                <a href="<?= base_url('dashboard'); ?>" style="color: white;" class="nav-link">
                <i class="fa-solid fa-house"></i>
                <p>
                    Home
                </p>
                </a>
            </li>
            <?php if($this->session->userdata('akses')=='1'):?>
            <li class="nav-item">
                <a href="<?= base_url('dashboard/petugas'); ?>" style="color: white;" class="nav-link">
                <i class="fa-solid fa-user"></i>
                <p>
                    Table petugas
                </p>
                </a>
            </li>
            <?php endif;?>
            <li class="nav-item">
                <a href="<?= base_url('dashboard/tabel_pengaduan'); ?>" style="color: white;" class="nav-link">
                <i class="fa-solid fa-envelope"></i>
                <p>
                    Table pengaduan
                </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?= base_url('dashboard/tabel_tangapan'); ?>" style="color: white;" class="nav-link">
                <i class="fa-solid fa-table"></i>
                <p>
                    Tangapan
                </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?= base_url('auth/logout'); ?>" style="color: white;" class="nav-link">
               
                <p>
                <i class="fa-solid fa-right-from-bracket"></i>
                    Logout
                </p>
                </a>
            </li>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>