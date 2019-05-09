<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
  <div class="container">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- LEFT SIDE NAVBAR -->
    <div class="collapse navbar-collapse mr-auto" id="navbarsExample08">
      <ul class="navbar-nav">
        <li class="nav-item">
          <h4 class="navbar-brand mb-0 mr-5"><span class="font-weight-bolder">go-tasik</span></h4>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url() ?>">Beranda <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="dropdown08" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Pariwisata
          </a>
          <div class="dropdown-menu" aria-labelledby="dropdown08">
            <a class="dropdown-item" href="<?php echo site_url("objek-wisata"); ?>">Objek Wisata</a>
            <a class="dropdown-item" href="<?php echo site_url("wisata-kuliner"); ?>">Wisata Kuliner</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="<?php echo site_url("about"); ?>">Tentang Kami</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="<?php echo site_url("survei"); ?>">Survei</a>
        </li>
      </ul>
    </div>

    <!-- DROPDOWN NEAR SEARCH -->
    <ul class="navbar-nav">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown08" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Kategori
        </a>
        <div class="dropdown-menu" aria-labelledby="dropdown08">
          <a class="dropdown-item" href="<?php echo site_url("objek-wisata/air-terjun-dan-sungai"); ?>">Air Terjun & Sungai</a>
          <a class="dropdown-item" href="<?php echo site_url("objek-wisata/danau"); ?>">Danau</a>
          <a class="dropdown-item" href="<?php echo site_url("objek-wisata/gunung"); ?>">Gunung</a>
          <a class="dropdown-item" href="<?php echo site_url("objek-wisata/kolam-renang"); ?>">Kolam Renang</a>
          <a class="dropdown-item" href="<?php echo site_url("objek-wisata/pantai"); ?>">Pantai</a>
          <a class="dropdown-item" href="<?php echo site_url("objek-wisata/wisata-lainnya"); ?>">Wisata Lainnya</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?php echo site_url("wisata-kuliner/bubur-ayam"); ?>">Bubur Ayam</a>
          <a class="dropdown-item" href="<?php echo site_url("wisata-kuliner/kupat-tahu"); ?>">Kupat Tahu</a>
          <a class="dropdown-item" href="<?php echo site_url("wisata-kuliner/mie-bakso"); ?>">Mie Bakso</a>
          <a class="dropdown-item" href="<?php echo site_url("wisata-kuliner/soto"); ?>">Soto</a>
          <a class="dropdown-item" href="<?php echo site_url("wisata-kuliner/kuliner-lainnya"); ?>">Kuliner Lainnya</a>

          <!-- DEFAULT -->
          <!-- <a class="dropdown-item" href="<?php //echo site_url("objek-wisata/air-terjun-dan-sungai"); ?>">Air Terjun & Sungai</a>
          <a class="dropdown-item" href="<?php //echo site_url("objek-wisata/danau"); ?>">Danau</a>
          <a class="dropdown-item" href="<?php //echo site_url("objek-wisata/gunung"); ?>">Gunung</a>
          <a class="dropdown-item" href="<?php //echo site_url("objek-wisata/kolam-renang"); ?>">Kolam Renang</a>
          <a class="dropdown-item" href="<?php //echo site_url("objek-wisata/pantai"); ?>">Pantai</a>
          <a class="dropdown-item" href="<?php //echo site_url("objek-wisata/wisata-lainnya"); ?>">Wisata Lainnya</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?php //echo site_url("wisata-kuliner/bubur-ayam"); ?>">Bubur Ayam</a>
          <a class="dropdown-item" href="<?php //echo site_url("wisata-kuliner/kupat-tahu"); ?>">Kupat Tahu</a>
          <a class="dropdown-item" href="<?php //echo site_url("wisata-kuliner/mie-bakso"); ?>">Mie Bakso</a>
          <a class="dropdown-item" href="<?php //echo site_url("wisata-kuliner/soto"); ?>">Soto</a>
          <a class="dropdown-item" href="<?php //echo site_url("wisata-kuliner/kuliner-lainnya"); ?>">Kuliner Lainnya</a> -->

        </div>
      </li>
    </ul>
    <!-- END OF DROPDOWN NEAR SEARCH -->

    <!-- SEARCH in NAVBAR -->
    <?php echo form_open('cari-pariwisata'); ?>
    <div class="input-group form-sm form-2 pl-2 mt-3">
      <input class="form-control" name="search" type="text" placeholder="Cari pariwisata" aria-label="Search" required>
      <div class="input-group-append">
        <button class="input-group-text teal" type="submit" style="border-style: none;">
          <i class="fa fa-search text-white" aria-hidden="true"></i>
        </button>
      </div>
    </div>
    <?php echo form_close(); ?>
  </div>
</nav>
