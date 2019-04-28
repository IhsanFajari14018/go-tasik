<ul class="sidebar navbar-nav" style="background-color:#05182d">
  <!-- <li class="nav-item dropdown <?php //echo $this->uri->segment(2) == 'pariwisata' ? 'active': '' ?>">
    <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <i class="far fa-list-alt"></i>
      <span>Pariwisata</span>
    </a>
    <div class="dropdown-menu" aria-labelledby="pagesDropdown">
      <a class="dropdown-item" href="<?php //echo site_url('admin/pariwisata') ?>">Daftar</a>
      <a class="dropdown-item" href="<?php //echo site_url('admin/pariwisata/add') ?>">Tambah</a>
    </div>
  </li> -->
  <li class="nav-item <?php echo $this->uri->segment(2) == 'pariwisata' ? 'active': '' ?>">
    <a class="nav-link" href="<?php echo site_url('admin/pariwisata') ?>">
      <i class="fas fa-list-alt"></i>
      <span>Pariwisata</span>
    </a>
  </li>
  <li class="nav-item <?php echo $this->uri->segment(2) == 'ulasan' ? 'active': '' ?>">
    <a class="nav-link" href="<?php echo site_url('admin/ulasan') ?>">
      <i class="fas fa-edit"></i>
      <span>Ulasan</span>
    </a>
  </li>
  <li class="nav-item <?php echo $this->uri->segment(2) == 'data survei' ? 'active': '' ?>">
    <a class="nav-link" href="<?php echo site_url('survei/downloadDataSurvei') ?>">
      <i class="fa fa-download"></i>
      <span>Data Survei</span>
    </a>
  </li>
</ul>
