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

<body>
	<!-- NAVBAR -->
	<?php $this->load->view("_partials/navbar.php") ?>
	<!-- END OF NAVBAR -->

	<main role="main">
		<div class="album py-5">
			<div class="container">
				<div class="row">

					<!--LIST PARIWISATA -->
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
											<div class="d-inline"><small class="text-muted">Harga mulai dari: Rp <?php echo $d->harga_terendah; ?>,-/porsi</small></div>
										</div>
									</div>
								</div>
								<div class="card-footer w-100 text-muted inline-block ">
									<div class="d-inline"><a href=<?php echo $d->url_map; ?> target="_blank"><i class="fa fa-map-marker"></i><?php echo $d->alamat; ?></a></div>
									<?php
									$rating = "";
									if($d->rating==0){
										$rating = "-";
									}else{
										$rating = substr($d->rating,0,3);
									}
									?>
									<div class="float-right">Rating: <span class="text-warning"> <?php echo $rating; ?> </span></div>
								</div>
							</div>
						</div>
						<!-- END OF A card section -->

					<?php } ?>

					<!-- Recomendation Section -->
					<div class="col-md-12 mt-5">
						<h3 class="text-center mb-4">Rekomendasi Pariwisata</h3>
					</div>
					<div class="col-md-4">
						<div class="card mb-4 shadow-sm">
							<a href="#">
								<img src="https://3.bp.blogspot.com/-cgo2nXrKm20/V1tBZwmAAnI/AAAAAAAACkI/amCb3eV6TZY8lJvxvHnqokKcs4I9ogJ0gCLcB/s320/Tempat%2BPenjual%2BBaso%2BEnak%2Bdi%2BTasikmalaya.jpg" class="img-fluid" alt="" style="height:191.797px; width:100%;">
							</a>
							<div class="card-body">
								<h4 class="card-title">Mie Bakso Laksana</h4>
								<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
								<div class="d-flex justify-content-between align-items-center">
									<div class="btn-group">
										<button type="button" class="btn btn-sm btn-outline-secondary">View</button>
										<button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
									</div>
									<small class="text-muted">9 mins</small>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card mb-4 shadow-sm">
							<a href="#">
								<img src="https://c1.staticflickr.com/9/8516/8574339730_2330e4a7bc_b.jpg" class="img-fluid" alt="">
							</a>
							<div class="card-body">
								<h4 class="card-title">Kampung Naga</h4>
								<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
								<div class="d-flex justify-content-between align-items-center">
									<div class="btn-group">
										<button type="button" class="btn btn-sm btn-outline-secondary">View</button>
										<button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
									</div>
									<small class="text-muted">9 mins</small>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card mb-4 shadow-sm">
							<a href="#">
								<img src="https://mytrip123.com/wp-content/uploads/2018/11/pantai-cipatujah.jpg" class="img-fluid" alt="">
							</a>
							<div class="card-body">
								<h4 class="card-title">Pantai Cipatujah</h4>
								<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. </p>
								<div class="d-flex justify-content-between align-items-center">
									<div class="btn-group">
										<button type="button" class="btn btn-sm btn-outline-secondary">View</button>
										<button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
									</div>
									<small class="text-muted">9 mins</small>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
			<!-- END OF LIST OBJEK WISATA -->
		</div>

	</main>


	<div class="container">
		<div class="row">
			<div class="col">
				<p class="float-right">
					<a href="#">Back to top</a>
				</p>
			</div>
		</div>
	</div>


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
						<i class="fa fa-phone"></i> <a href="whatsapp://send?text=Hai%2C%20Ihsan!" class="text-light">0822-4027-0827</a>
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
