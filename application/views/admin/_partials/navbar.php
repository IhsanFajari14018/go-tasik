<nav class="navbar navbar-expand navbar-dark bg-dark static-top">
  <a class="navbar-brand mr-1" href="<?php echo site_url(); ?>admin"><?php echo SITE_NAME ?></a>
  <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
    <i class="fas fa-bars"></i>
  </button>

  <!-- Navbar -->
  <ul class="navbar-nav ml-auto mr-0 mr-md-3 my-2 my-md-0">
    <li class="nav-item dropdown no-arrow">
      <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
      aria-expanded="false">
      <i class="fas fa-user-circle fa-fw"></i> Admin
    </a>
    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
    </div>
  </li>
</ul>
</nav>
