<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<html lang="en">
<head>
	<!-- STYLING -->
	<?php $this->load->view("_partials/head.php") ?>
	<!-- END OF STYLING -->
	<title><?php echo $detail_pariwisata->nama; ?></title>
</head>

<body id="top-section">
	<!-- NAVBAR -->
	<?php $this->load->view("_partials/navbar.php") ?>
	<!-- END OF NAVBAR -->

	<main role="main">
		<div class="album py-5">
			<div class="container">

				<!-- SETELAH MENGISI KOMENTAR -->
				<?php if($this->session->success){?>
					<div class="alert alert-success" role="alert">
						<?php echo $this->session->flashdata('success'); ?>
					</div>
				<?php } ?>

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
				<div class="row featurette mt-2">
					<div class="col-md-5">
						<h5 class="featurette-heading"><span class="text-muted font-weight-bolder">Lokasi</span></h5>
						<a href="<?php echo $detail_pariwisata->url_map; ?>" target="_blank">
							<i class="fa fa-map-marker"></i>
							<?php echo $detail_pariwisata->alamat; ?>
						</a>
					</div>
					<div class="col-md-3">
						<?php if($tipe_pariwisata=='wisata'){ ?>
							<?php if($hasWeekDayEnd){ ?>
								<h5 class="featurette-heading"><span class="text-muted font-weight-bolder">Harga</span></h5>
								<?php foreach ($data_tiket as $p): ?>
									<p class="lead mb-0"> <?php echo $p->nama.": ".$p->harga; ?> </p>
								<?php endforeach; ?>
							<?php }else{ ?>
								<?php $harga = $detail_pariwisata->harga_terendah;
								if($harga==NULL){
									$harga = "GRATIS";
								}else{
									$harga = $detail_pariwisata->harga_terendah;
								}?>
								<h5 class="featurette-heading"><span class="text-muted font-weight-bolder">Harga</span></h5>
								<p class="lead mb-0">
									Tiket:
									<span id="tiket"><?php echo $harga; ?></span>,-
									/orang
								</p>
							<?php } ?>
						<?php } ?>
					</div>
					<div class="col-md-2">
						<h5 class="featurette-heading"><span class="text-muted font-weight-bolder">Buka</span></h5>
						<p class="lead mb-0"> <?php echo $detail_pariwisata->buka; ?> </p>
					</div>
					<div class="col-md-2">
						<h5 class="featurette-heading"><span class="text-muted font-weight-bolder">Rating</span></h5>
						<?php $rating = "";
						if($detail_pariwisata->rating==0){
							$rating = "Belum ada rating";
						}else{
							$rating = substr($detail_pariwisata->rating,0,3);
						} ?>
						<p class="lead"><span class="text-warning font-weight-bold"><?php echo $rating; ?></span></p>
					</div>
				</div>
				<!-- END OF More Desc. -->

				<div class="my-5">
					<hr class="featurette-divider">
				</div>

				<!-- SPOT WISATA -->
				<div class="row">
					<div class="col-md-12 mt-5">
						<?php if($tipe_pariwisata=='wisata'){ ?>
							<h1 class="text-center mb-4 font-weight-bolder">GALERI OBJEK WISATA</h1>
						<?php }else{ ?>
							<h1 class="text-center mb-4 font-weight-bolder">MENU</h1>
						<?php } ?>

					</div>

					<?php $id=0;?>
					<?php foreach($data_pariwisata as $d){ ?>

						<div class="col-md-4">
							<div class="card mb-4 shadow-sm">
								<img src="<?php echo base_url($d->foto); ?>" class="img-fluid" alt="" style="height:200px; width:auto;">
								<div class="card-body">
									<h4 class="card-title"><?php echo $d->nama; ?></h4>
									<?php if($tipe_pariwisata=='kuliner'){ ?>
										<small class="text-muted"><?php echo $d->deskripsi; ?></small>
										<p class="card-text rupiah">
											Harga:
											<span id="rp<?php echo $id;?>"><?php echo $d->harga; ?></span>,-
											/porsi
										</p>
									<?php } ?>

								</div>
							</div>
						</div>

						<?php $id=$id+1; ?>
					<?php } ?>

				</div>
				<!-- END OF SPOT WISATA -->

				<!-- REVIEW -->
				<div>
					<div class="my-5">
						<hr class="featurette-divider">
					</div>
					<h2 class="featurette-heading">
						Ulasan
					</h2>

					<?php $display = 0; ?>
					<?php foreach ($daftar_ulasan as $d ) { ?>
						<?php if($d->ditampilkan==1){ ?>
							<!-- IF TRUE BOLEH DITAMPILKAN -->
							<div class="row">
								<div class="col">
									<p class="featurette-heading mb-0"><span class="text-muted">Oleh </span> <?php echo $d->nama; ?></p>
									<p class="featurette-heading"><span class="text-muted">Rating: </span> <span class="text-warning font-weight-bold"><?php echo $d->rating; ?></span></p>
									<p class="featurette-heading"><?php echo $d->ulasan; ?></span></p>
									<small><p class="text-muted text-right mb-0"><?php echo $d->tanggal; ?></p></small>
								</div>
							</div>
							<hr class="featurette-divider">
							<!-- Update Display -->
							<?php $display = 1;?>
						<?php }?>
					<?php } ?>

					<!-- JIKA BELUM ADA ULASAN: -->
					<?php if($display==0){ ?>
						<p class="featurette-heading">Jadilah orang pertama yang memberi ulasan!</span></p>
					<?php } ?>

				</div>
				<!-- END OF REVIEW -->

				<!-- MENGISI KOMENTAR / REVIEW -->
				<div class="mt-5 mb-3">
					<h2 class="featurette-heading">
						Form untuk mengisi ulasan
					</h2>
				</div>

				<!-- ISI KOMENTAR -->
				<?php echo form_open('ulasan/'.$detail_pariwisata->id_pariwisata); ?>
				<div class="form-row">
					<div class="col-md-4 mb-3">
						<label for="validationDefault01">Nama</label>
						<input type="text" name="nama" class="form-control" id="validationDefault01" placeholder="Masukan namamu .." value="" required>
					</div>
				</div>
				<div class="form-row">
					<div class="col-md-4 mb-3">
						<label for="validationDefault01">Email</label>
						<input type="text" name="email" class="form-control" id="validationDefault01" placeholder="Masukan emailmu .." value="" required>
					</div>
				</div>
				<div class="form-row">
					<div class="col-md-4 mb-3">
						<label for="validationDefault01">Rating</label>
						<select name="rating" class="custom-select" required>
							<option value="">Beri rating 1-5</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
						</select>
					</div>
				</div>
				<div class="form-row">
					<div class="col-md-4 mb-3">
						<label for="exampleFormControlTextarea1">Masukan Ulasanmu</label>
						<textarea name="ulasan" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Masukan ulasanmu .." required></textarea>
					</div>
				</div>
				<button class="btn btn-success" type="submit">Kirim Ulasan</button>
				<?php echo form_close(); ?>
				<!-- END OF ISI KOMENTAR -->

				<?php if($is_show){ ?>
					<!-- Recomendation Section -->
					<div class="row">
						<div class="col-md-12 mt-5">
							<h3 class="text-center mb-4">Rekomendasi Pariwisata</h3>
						</div>

						<!-- loop -->
						<?php foreach ($daftar_rekomendasi as $d ) { ?>
							<div class="col-md-3">
								<div class="card mb-4 shadow-sm">
									<a href="<?php echo site_url("pariwisata/detail/".$d->id_rekomendasi); ?>">
										<img src="<?php echo base_url($d->foto); ?>" class="img-fluid" alt="" style="height:200px; width:350px;">
									</a>
									<div class="card-body">
										<h4 class="card-title"> <?php echo $d->nama; ?> </h4>
									</div>
								</div>
							</div>
						<?php } ?>

					</div>
					<!-- END OF Recomendation Section -->
				<?php } ?>

				<!-- Recomendation Section -->
				<div class="row">
					<div class="col-md-12 mt-5">
						<h3 class="text-center mb-4">Pariwisata Serupa</h3>
					</div>

					<!-- loop -->
					<?php foreach ($daftar_pariwisataSerupa as $d ) { ?>
						<div class="col-md-3">
							<div class="card mb-4 shadow-sm">
								<a href="<?php echo site_url("pariwisata/detail/".$d->id_pariwisata); ?>">
									<img src="<?php echo base_url($d->foto); ?>" class="img-fluid" alt="" style="height:200px; width:350px;">
								</a>
								<div class="card-body">
									<h4 class="card-title"> <?php echo $d->nama; ?> </h4>
								</div>
							</div>
						</div>
					<?php } ?>

				</div>
				<!-- END OF Recomendation Section -->

			</div>
			<!-- END OF DETAIL PARIWISATA -->
		</div>
	</main>

	<!-- Scroll to Top -->
	<?php $this->load->view("_partials/scrolltop.php") ?>

	<!-- FOOTER -->
	<?php $this->load->view("_partials/footer.php") ?>

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
	<!-- Rupiah -->
	<script type="text/javascript" src="<?php echo base_url();?>/lib/js/rupiah.js"></script>

	</html>
</body>
