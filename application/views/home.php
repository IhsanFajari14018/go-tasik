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

<body id="top-section">
	<!-- NAVBAR -->
	<?php $this->load->view("_partials/navbar.php") ?>

	<!-- Main Section -->
	<main role="main">
		<!-- CAROUSEL -->
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
			</ol>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="<?php echo base_url('img/1.png'); ?>" class="d-block w-100" alt="Pantai Karang Tawulan" height="500">
				</div>
				<div class="carousel-item">
					<img src="<?php echo base_url('img/2.png'); ?>" class="d-block w-100" alt="Curious Rio 3" height="500">
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
		</div>
		<!-- END Recomendation Section -->

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

</body>
</html>
