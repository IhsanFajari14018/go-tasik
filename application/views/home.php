<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<html lang="en">
<head>
	<!-- STYLING -->
	<?php $this->load->view("_partials/head.php") ?>
	<!-- END OF STYLING -->
	<title>go-tasik - Rekomendasi Pariwisata di Tasikmalaya</title>
</head>

<body>
	<!-- NAVBAR -->
	<?php $this->load->view("_partials/navbar.php") ?>

	<!-- Main Section -->
	<main role="main">
		<!-- CAROUSEL -->
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="<?php echo base_url('img/IMG_1628.JPG'); ?>" class="d-block w-100" alt="Curious Rio 1" height="500">
					<div class="container">
						<div class="carousel-caption text-left">
							<h1 class="text-light">Pantai Karang Tawulan</h1>
							<p class="text-light">
								Pantai ini mempunyai karang-karang yang mirip dengan Pantai Lot Bali.
								Hamparan karang berumput di tengah pantai di antara gelombang laut biru merupakan pesona indah bagi pantai ini.
							</p>
						</div>
					</div>
				</div>
				<div class="carousel-item">
					<img src="<?php echo base_url();?>img/IMG20190116110221.jpg" class="d-block w-100" alt="Curug Citoe" height="500"/>
					<div class="container">
						<div class="carousel-caption text-right">
							<h1>Curug Citoe</h1>
							<p class="text-light">
								Aliran air Citoe ini jatuh membentuk curug yang ketinggiannya sekitar 2 meter dengan
								kedalaman sungai hingga 7 meter.
							</p>
						</div>
					</div>
				</div>
				<div class="carousel-item">
					<img src="<?php echo base_url('img/IMG_1740.JPG'); ?>" class="d-block w-100" alt="Curious Rio 3" height="500">
					<div class="container">
						<div class="carousel-caption text-left">
							<h1>Pantai Madasari</h1>
							<p class="text-light">
								Pantai ini menyajikan panorama alam yang spesifik dengan pulau-pulau
								kecilnya berpadu dengan hijaunya datan masawah, dan dihiasi pula oleh
								atu-batu karang yang unik , dengan pantainya yang landai.
							</p>
						</div>
					</div>
				</div>
			</div>
			<a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>

		<!-- Rekomendasi Pariwisata -->
		<div class="album mt-1">
			<div class="container">
				<div class="row">
					<div class="col-md-12 mt-5">
						<h3 class="text-center mb-4">Rekomendasi Pariwisata</h3>
					</div>
					<!-- 1 -->
					<div class="col-md-4">
						<div class="card mb-4 shadow-sm">
							<a href="<?php echo site_url("pariwisata/detail_wisata"); ?>">
								<img src="https://lh5.googleusercontent.com/p/AF1QipMlZx50XTvsdLrd7vRqjUqQI_G_kBkmDRWMH_e7=w408-h272-k-no" class="img-fluid" alt="">
							</a>
							<div class="card-body">
								<h4 class="card-title">Lembah Gunung Galunggung</h4>
								<p class="card-text">
									Stratovolcano aktif dengan serangkaian tangga panjang menuju tepi kaldera &
									pemandangan mengarah ke Kota Tasikmalaya. <a href="#">Info lebih lanjut...</a>
								</p>
								<div class="d-inline"><small class="text-muted">Buka: 04:00 - 21:00</small></div>
								<div class="d-inline mx-2"><small class="text-muted">|</small></div>
								<div class="d-inline"><small class="text-muted">Harga: Rp 5000,-/org</small></div>
								<div class="d-flex justify-content-between align-items-center">
									<div class="btn-group">
										<!-- <button type="button" class="btn btn-sm btn-outline-secondary">View</button> -->
									</div>
									<!-- <small class="text-muted">9 mins</small> -->
								</div>
							</div>
						</div>
					</div>
					<!-- 2 -->
					<div class="col-md-4">
						<div class="card mb-4 shadow-sm">
							<a href="<?php echo site_url('pariwisata/detail_kuliner'); ?>">
								<img src="<?php echo base_url('img/13410202016-0911-09180400780x390.JPG'); ?>" class="img-fluid" alt="">
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
					<!-- 3 -->
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
		</div>
		<!-- END Recomendation Section -->

	</main>

	<!-- BACK TO TOP BUTTON -->
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
