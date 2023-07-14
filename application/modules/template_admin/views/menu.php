<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-utama sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-leaf"></i>
        </div>
        <div class="sidebar-brand-text">Admin Pakar Padi</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('Admin/Dashboard'); ?>">
          <i class="fas fa-home"></i>
          <span>Dashboard</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('Admin/RiwayatKonsultasi'); ?>">
          <i class="fas fa-headset"></i>
          <span>Riwayat Konsultasi</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('Admin/Gejala'); ?>">
          <i class="fas fa-virus"></i>
          <span>Data Gejala</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('Admin/Penyakit'); ?>">
          <i class="fas fa-viruses"></i>
          <span>Data Penyakit</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('Admin/Aturan'); ?>">
          <i class="fas fa-wrench"></i>
          <span>Aturan</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('Admin/BasisPengetahuan'); ?>">
          <i class="fas fa-folder-open"></i>
          <span>Basis Pengetahuan</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->