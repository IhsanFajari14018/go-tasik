<!DOCTYPE html>
<html lang="en">

<head>
  <?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body id="page-top">
  <?php $this->load->view("admin/_partials/navbar.php") ?>
  <div id="wrapper">
    <?php $this->load->view("admin/_partials/sidebar.php") ?>
    <div id="content-wrapper">
      <div class="container-fluid">

        <?php if ($this->session->flashdata('delete')): ?>
          <div class="alert alert-success" role="alert">
            <?php echo $this->session->flashdata('delete'); ?>
          </div>
        <?php endif; ?>

        <?php if ($this->session->flashdata('success')): ?>
          <div class="alert alert-success" role="alert">
            <?php echo $this->session->flashdata('success'); ?>
          </div>
        <?php endif; ?>

        <?php $this->load->view("admin/_partials/breadcrumb.php") ?>

        <!-- Description -->
        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">
              <?php echo $detail_pariwisata->nama; ?>
            </h2>
            <p class="lead">
              <?php echo $detail_pariwisata->deskripsi; ?>
            </p>
          </div>
          <div class="col-md-5">
            <?php $foto = $detail_pariwisata->foto; ?>
            <img src="<?php echo base_url($foto);?>" class="img-fluid rounded" alt="-">
          </div>
        </div>
        <!-- END OF Description -->

        <!-- More Desc. -->
        <div class="row featurette mt-3">

          <!-- LOKASI -->
          <div class="col-md-5">
            <h5 class="featurette-heading"><span class="text-muted">Lokasi</span></h5>
            <a href="<?php echo $detail_pariwisata->url_map; ?>" target="_blank">
              <i class="fa fa-map-marker"></i>
              <?php echo $detail_pariwisata->alamat; ?>
            </a>
          </div>

          <!-- HARGA -->
          <div class="col-md-3">
            <?php if($tipe_pariwisata=='wisata'){ ?>
              <?php if($hasWeekDayEnd){ ?>
                <h5 class="featurette-heading"><span class="text-muted">Harga</span></h5>
                <?php foreach ($data_tiket as $p): ?>
                  <p class="lead mb-0"> <?php echo $p->nama.": ".$p->harga; ?> </p>
                <?php endforeach; ?>
              <?php }else{ ?>
                <?php $harga = $detail_pariwisata->harga_terendah;
                if($harga==NULL){
                  $harga = "GRATIS";
                }else{
                  $harga = " ".$detail_pariwisata->harga_terendah.",- /org";
                }?>
                <h5 class="featurette-heading"><span class="text-muted">Harga</span></h5>
                <p class="lead mb-0">Tiket: <?php echo $harga; ?> </p>
              <?php } ?>
            <?php } ?>
          </div>

          <!-- JAM BUKA -->
          <div class="col-md-2">
            <h5 class="featurette-heading"><span class="text-muted">Buka</span></h5>
            <p class="lead mb-0"> <?php echo $detail_pariwisata->buka; ?> </p>
          </div>

          <!-- RATING -->
          <div class="col-md-2">
            <h5 class="featurette-heading"><span class="text-muted">Rating</span></h5>
            <?php $rating = "";
            if($detail_pariwisata->rating==0){
              $rating = "Belum ada rating";
            }else{
              $rating = substr($detail_pariwisata->rating,0,3);
            } ?>
            <p class="lead"><span class="text-warning font-weight-bold"><?php echo $rating; ?></span></p>
          </div>

          <!-- EDIT THIS  -->
          <div class="col-md-12 my-3">
            <button onclick="goToEdit()" type="button" class="btn btn-info btn-md btn-block">EDIT</button>
          </div>

        </div>
        <!-- END OF More Desc. -->

        <div class="my-3">
          <hr class="featurette-divider">
        </div>

        <!-- DETAIL PARIWISATA -->
        <div class="row">
          <div class="col-md-12 mt-5">
            <?php if($tipe_pariwisata=='wisata'){ ?>
              <h2 class="mb-3">Data Objek Wisata</h2>
            <?php }else{ ?>
              <h2 class="mb-3">MENU</h2>
            <?php } ?>
          </div>
        </div>

        <!-- DataTables Detail -->
        <div class="card mb-3">
          <div class="card-header">
            <a href="<?php echo site_url('admin/Detail/add/'.$detail_pariwisata->id_pariwisata) ?>"><i class="fas fa-plus"></i> Tambah Data Baru</a>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <?php if($tipe_pariwisata=='kuliner'){ ?>
                      <th>Deskripsi</th>
                    <?php } ?>
                    <th>Harga</th>
                    <th>Foto</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>

                  <?php foreach ($data_pariwisata as $d): ?>
                    <tr>
                      <td> <?php echo $d->id_detail ?> </td>
                      <td> <?php echo $d->nama ?> </td>
                      <?php if($tipe_pariwisata=='kuliner'){ ?>
                        <td><?php echo $d->deskripsi ?></td>
                      <?php } ?>
                      <td> <?php echo $d->harga ?> </td>
                      <td>
                        <?php $foto = $d->foto;
                        if(empty($foto)){
                          $foto = "Tidak ada foto";
                          echo $foto;
                        }else{ ?>
                          <img src="<?php echo base_url($foto) ?>" width="124" />
                        <?php } ?>
                      </td>
                      <td width="250">
                        <a href="<?php echo site_url('admin/Detail/edit/'.$d->id_detail.'/'.$d->fk_pariwisata) ?>" class="btn btn-small">
                          <i class="fas fa-edit"></i>
                          Edit
                        </a>
                        <a onclick="deleteConfirm('<?php echo site_url('admin/Detail/delete/'.$d->id_detail.'/'.$detail_pariwisata->id_pariwisata) ?>')" href="#!" class="btn btn-small text-danger">
                          <i class="fas fa-trash"></i>
                          Delete
                        </a>
                      </td>
                    </tr>
                  <?php endforeach; ?>

                </tbody>
              </table>
            </div>
          </div>
        </div>
        <!-- END OF DETAIL PARIWISATA -->

        <!-- REVIEW -->
        <div>
          <div class="mt-5 mb-3">
            <h2 class="featurette-heading">Ulasan</h2>
          </div>

          <!-- DataTables Review -->
          <div class="table-responsive">
            <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Nama</th>
                  <th>Rating</th>
                  <th>Ulasan</th>
                  <th>Tanggal</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($daftar_ulasan as $d): ?>
                  <?php if($d->ditampilkan==1){ ?>
                    <tr>
                      <td> <?php echo $d->nama ?> </td>
                      <td> <?php echo $d->rating ?> </td>
                      <td> <?php echo $d->ulasan ?> </td>
                      <td> <?php echo $d->tanggal ?> </td>
                    </tr>
                  <?php }?>
                <?php endforeach; ?>

              </tbody>
            </table>
          </div>

        </div>
        <!-- END OF REVIEW -->

      </div>
    </div>

    <!-- Sticky Footer -->
    <?php $this->load->view("admin/_partials/footer.php") ?>
  </div>
</div>

<?php $this->load->view("admin/_partials/scrolltop.php") ?>
<?php $this->load->view("admin/_partials/modal.php") ?>
<?php $this->load->view("admin/_partials/js.php") ?>


<script>
function deleteConfirm(url){
  $('#btn-delete').attr('href', url);
  $('#deleteModal').modal();
}

function goToEdit(){
  window.location.href="<?php echo site_url('admin/pariwisata/edit/'.$detail_pariwisata->id_pariwisata); ?>";
}
</script>

</body>

</html>
