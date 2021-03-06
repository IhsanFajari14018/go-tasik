<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<html lang="en">
<head>
	<!-- STYLING -->
	<?php $this->load->view("_partials/head.php") ?>
	<!-- END OF STYLING -->
	<title>Daftar Pariwisata</title>
</head>

<body id="top-section">
	<!-- NAVBAR -->
	<?php $this->load->view("_partials/navbar.php") ?>
	<!-- END OF NAVBAR -->

	<main role="main">
		<div class="album py-5">
			<div class="container">
				<div class="row">

					<!--LIST PARIWISATA -->
					<?php $id=0;?>
					<?php foreach($daftar_pariwisata as $d){ ?>

						<!-- A card section -->
						<div class="col-md-12 mb-4">
							<div class="card">
								<div class="row no-gutters">
									<div class="col-md-3">
										<a href=" <?php echo site_url("pariwisata/detail/".$d->id_pariwisata); ?>">
											<img src="<?php echo base_url($d->foto); ?>" class="img-fluid" alt="">
										</a>
									</div>
									<div class="col-md-9">
										<div class="card-block px-2">
											<h4 class="card-title"> <?php echo $d->nama; ?> </h4>
											<p class="card-text">
												<?php echo substr($d->deskripsi,0,280)."..." ?>
												<a href="<?php echo site_url("pariwisata/detail/".$d->id_pariwisata) ; ?>">
													<span class="text-primary">Baca Lebih Lanjut >></span>
												</a>
											</p>
											<div class="d-inline"><small class="text-muted">Buka: <?php echo $d->buka; ?></small></div>
											<div class="d-inline mx-2"><small class="text-muted">|</small></div>

											<!-- give condition -->
											<?php if( ($d->kategori == "gunung") || ($d->kategori == "kolam-renang") || ($d->kategori == "danau") ||
											($d->kategori == "air-terjun-dan-sungai") || ($d->kategori == "pantai") || ($d->kategori == "wisata-lainnya") ||
											($d->kategori == "kolam-renang") ){ ?>
												<?php if($d->harga_terendah == NULL){ ?>
													<div class="d-inline">
														<small class="text-muted rupiah">
															<span id="rp<?php echo $id;?>">Tiket masuk gratis!</span>
														</small>
													</div>
												<?php }else{ ?>
													<div class="d-inline">
														<small class="text-muted rupiah">
															Harga tiket mulai dari:
															<span id="rp<?php echo $id;?>"><?php echo $d->harga_terendah; ?></span>,-
															/orang
														</small>
													</div>
												<?php } ?>
											<?php }else{ ?>
												<div class="d-inline">
													<small class="text-muted rupiah">
														Harga mulai dari:
														<span id="rp<?php echo $id;?>"><?php echo $d->harga_terendah; ?></span>
														,-/porsi
													</small>
												</div>
											<?php } ?>
										</div>
									</div>
								</div>
								<div class="card-footer w-100 text-muted inline-block ">
									<div class="d-inline">
										<a href=<?php echo $d->url_map; ?> target="_blank">
											<i class="fa fa-map-marker"></i> <?php echo $d->alamat; ?>
										</a>
									</div>

									<!-- give condition -->
									<?php $rating = "";
									if($d->rating==0){
										$rating = "-";
									}else{
										$rating = substr($d->rating,0,3);
									} ?>
									<div class="float-right">Rating: <span class="text-warning"> <?php echo $rating; ?> </span></div>
								</div>
							</div>
						</div>
						<!-- END OF A card section -->

						<?php $id=$id+1; ?>
					<?php } ?>

					<!-- Pagination links -->
					<div class="col-md-12">
						<div class="float-right">
							<h6 class="font-weight-bolder">
								<?php echo $this->pagination->create_links(); ?>
							</h6>
						</div>
					</div>

					<!-- Recomendation Section -->
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
			</div>
			<!-- END OF LIST OBJEK WISATA -->
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


</body>
</html>
