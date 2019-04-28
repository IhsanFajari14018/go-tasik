<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<html lang="en">
<head>
  <!-- STYLING -->
  <?php $this->load->view("_partials/head.php") ?>
  <!-- END OF STYLING -->
  <title>Survei Pariwisata Tasikmalaya</title>
</head>

<body id="top-section">
  <!-- NAVBAR -->
  <?php $this->load->view("_partials/navbar.php") ?>

  <main role="main">
    <!-- SETELAH MENGISI SURVEI -->
    <?php if($this->session->success){?>
      <div class="container mt-3">
        <div class="alert alert-success " role="alert">
          <?php echo $this->session->flashdata('success'); ?>
        </div>
      </div>
    <?php }else if($this->session->failure){ ?>
      <div class="container mt-3">
        <div class="alert alert-danger" role="alert">
          <?php echo $this->session->flashdata('failure'); ?>
        </div>
      </div>
    <?php } ?>

    <!-- ABOUT -->
    <section class="jumbotron text-center py-4">
      <div class="container">
        <h1 class="jumbotron-heading">Form Survei untuk Rekomendasi Pariwisata di Tasikmalaya</h1>
        <p class="lead">
          Anda dapat membantu memperbaharui data rekomendasi pariwisata pada sistem ini dengan cara mengisi survei dibawah ini. Terimakasih.
        </p>
      </div>
    </section>

    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h5>
            Untuk mengisi survei, silahkan pilih pariwisata yang menurut
            Anda patut untuk dikunjungi.
          </h5>
        </div>

        <div class="col-md-12">
          <?php echo form_open('Survei/sendDataSurvei'); ?>

          <!-- Objek Wisata -->
          <div class="form-row">
            <div class="col-md-6 mt-2">
              <label for="validationDefault01"><span class="font-weight-bolder" style="font-size: 120%;">Objek Wisata:</span></label>
              <?php foreach ($daftar_wisata as $d ) { ?>
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" name="objek_wisata[]" value="<?php echo $d->nama; ?>" class="custom-control-input" id="<?php echo $d->id_pariwisata; ?>">
                  <label class="custom-control-label" for="<?php echo $d->id_pariwisata; ?>"><?php echo $d->nama; ?></label>
                </div>
              <?php } ?>
            </div>
          </div>

          <hr class="mt-4">

          <!-- Wisata Kuliner -->
          <div class="form-row">
            <!-- Kuliner Mie Bakso -->
            <div class="col-md-6 mt-2">
              <label for="validationDefault01"><span class="font-weight-bolder" style="font-size: 120%;">Kuliner Mie Bakso:</span></label>
              <?php foreach ($daftar_mie_bakso as $d ) { ?>
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" name="mie_bakso[]" value="<?php echo $d->nama; ?>" class="custom-control-input" id="<?php echo $d->id_pariwisata; ?>">
                  <label class="custom-control-label" for="<?php echo $d->id_pariwisata; ?>"><?php echo $d->nama; ?></label>
                </div>
              <?php } ?>
            </div>

            <!-- Kuliner Bubur Ayam -->
            <div class="col-md-6 mt-2">
              <label for="validationDefault01"><span class="font-weight-bolder" style="font-size: 120%;">Kuliner Bubur Ayam:</span></label>
              <?php foreach ($daftar_bubur_ayam as $d ) { ?>
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" name="bubur_ayam[]" value="<?php echo $d->nama; ?>" class="custom-control-input" id="<?php echo $d->id_pariwisata; ?>">
                  <label class="custom-control-label" for="<?php echo $d->id_pariwisata; ?>"><?php echo $d->nama; ?></label>
                </div>
              <?php } ?>
            </div>

            <!-- Kuliner Soto -->
            <div class="col-md-6 mt-2">
              <label for="validationDefault01"><span class="font-weight-bolder" style="font-size: 120%;">Kuliner Soto:</span></label>
              <?php foreach ($daftar_soto as $d ) { ?>
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" name="soto[]" value="<?php echo $d->nama; ?>" class="custom-control-input" id="<?php echo $d->id_pariwisata; ?>">
                  <label class="custom-control-label" for="<?php echo $d->id_pariwisata; ?>"><?php echo $d->nama; ?></label>
                </div>
              <?php } ?>
            </div>

            <!-- Kuliner Kupat Tahu -->
            <div class="col-md-6 mt-2">
              <label for="validationDefault01"><span class="font-weight-bolder" style="font-size: 120%;">Kuliner Kupat Tahu:</span></label>
              <?php foreach ($daftar_kupat_tahu as $d ) { ?>
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" name="soto[]" value="<?php echo $d->nama; ?>" class="custom-control-input" id="<?php echo $d->id_pariwisata; ?>">
                  <label class="custom-control-label" for="<?php echo $d->id_pariwisata; ?>"><?php echo $d->nama; ?></label>
                </div>
              <?php } ?>
            </div>

            <!-- Kuliner Lainnya -->
            <div class="col-md-6 mt-2">
              <label for="validationDefault01"><span class="font-weight-bolder" style="font-size: 120%;">Kuliner Lainnya:</span></label>
              <?php foreach ($daftar_kuliner_lainnya as $d ) { ?>
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" name="kuliner_lainnya[]" value="<?php echo $d->nama; ?>" class="custom-control-input" id="<?php echo $d->id_pariwisata; ?>">
                  <label class="custom-control-label" for="<?php echo $d->id_pariwisata; ?>"><?php echo $d->nama; ?></label>
                </div>
              <?php } ?>
            </div>
          </div>

          <div class="form-row mt-4">
            <div class="col-md-12 text-center">
              <button class="btn btn-teal" type="submit">Kirim</button>
            </div>
          </div>

          <?php echo form_close(); ?>
        </div>

      </div>
    </div>
  </div>

</main>

<!-- Scroll to Top -->
<?php $this->load->view("_partials/scrolltop.php") ?>

<footer class="text-muted bg-dark my-0 ">
  <div class="container">
    <div class="row mb-2">
      <div class="col-md-4 text-light mt-3">
        <p>ABOUT THIS</p>
        <p>Go-Tasik is an information recomendation system in tourism.</p>
      </div>
      <div class="col-md-3 text-light mt-3">
      </div>
      <div class="col-md-5 text-light mt-3">
        <p>CONTACT US</p>
        <div class="row"><div class="col">
          <i class="fa fa-map-marker"></i> Perum Cisalak Jl. Raya Nusa Indah Blok 4 No.11
        </div></div>
        <div class="row"><div class="col">
          <i class="fa fa-phone"></i> <a href="whatsapp://send?text=Hello%2C%20World!" class="text-light">0822-4027-0827</a>
        </div></div>
        <div class="row"><div class="col">
          <i class="fa fa-envelope-o"></i> <a href="mailto:ihsan.fajari@gmail.com" class="text-light">ihsan.fajari@gmail.com</a>
        </div></div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12 text-center my-1 mt-4">
        <p>Copyright &copy; 2019 Go-Tasik</p>
      </div>
    </div>
  </div>
</footer>



<!-- SCRIPTS -->
<!-- JQuery -->
<script type="text/javascript" src="<?php echo base_url();?>/lib/js/jquery-3.3.1.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="<?php echo base_url();?>/lib/js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="<?php echo base_url();?>/lib/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="<?php echo base_url();?>/lib/js/mdb.js"></script>
<!-- MDBootstrap Datatables JS -->
<script type="text/javascript" src="<?php echo base_url();?>/lib/js/addons/datatables.min.js"></script>

</body>
</html>
