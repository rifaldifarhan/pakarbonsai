<body id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
    <div class="container px-4 px-lg-5">
      <a class="navbar-brand" href="#page-top">Pakar Bonsai</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ms-auto my-2 my-lg-0">
          <li class="nav-item"><a class="nav-link" href="<?php echo base_url('User/Home'); ?>"><i class="fa fa-house"></i> Home</a></li>
          <li class="nav-item"><a class="nav-link" href="<?php echo base_url('User/Konsultasi'); ?>"><i class="fa-solid fa-headset"></i> Konsultasi</a></li>
          <!-- <li class="nav-item"><a class="nav-link" href="<?php echo base_url('User/Rules'); ?>"><i class="fa-solid fa-book"></i> Rules</a></li> -->
          <li class="nav-item"><a class="nav-link" href="<?php echo base_url('User/BasisPengetahuan'); ?>"><i class="fa-solid fa-circle-info"></i> Basis Pengetahuan</a></li>
          <li class="nav-item"><a class="nav-link" href="<?php echo base_url('User/InfoPakar'); ?>"><i class="fa-solid fa-brain"></i> Info Pakar</a></li>
          <?php if (isset($_SESSION['username'])) : ?>
            <li class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="true"><i class="fas fa-user-circle"></i> <?php echo $_SESSION['username'] ?></a>
              <ul class="dropdown-menu">
                <li style="margin-left: 10px;"><a class="dropdown-menu-user" href="<?php echo base_url() ?>User/Profile">Profile</a></li>
                <li style="margin-left: 10px;"><a class="dropdown-menu-user" href="<?php echo base_url() ?>User/GantiPassword">Ubah Password</a></li>
              </ul>
            </li>
          <?php endif; ?>
          <?php if (isset($_SESSION['username']) > 0) : ?>
            <li class="nav-item"><a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal"><i class="fa-solid fa-right-to-bracket"></i> Logout</a></li>
          <?php else : ?>
            <li class="nav-item"><a class="nav-link" href="<?php echo base_url('Auth/Login'); ?>"><i class="fa-solid fa-right-to-bracket"></i> Login</a></li>
          <?php endif; ?>
        </ul>
      </div>
    </div>
  </nav>