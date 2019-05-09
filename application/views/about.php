<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<html lang="en">
<head>
	<!-- STYLING -->
	<?php $this->load->view("_partials/head.php") ?>
	<!-- END OF STYLING -->
	<title>Tentang go-tasik</title>
</head>

<body>
	<!-- NAVBAR -->
	<?php $this->load->view("_partials/navbar.php") ?>

	<main role="main">
		<!-- ABOUT -->
		<section class="jumbotron text-center teal">
			<div class="container">
				<h1 class="jumbotron-heading white-text"><span class="font-weight-bolder">go-tasik</span></h1>
				<p class="lead white-text">
					go-tasik adalah sebuah sistem informasi yang memberikan informasi rekomendasi berupa pariwisata di Tasikmalaya.
				</p>
				<hr>
				<p class="lead white-text">
					Versi 1.0
				</p>
			</div>
		</section>

		<div class="container">
			<div class="row">
				<div class="col-md-2">
					<!-- PUSH CONTENT TO MIDDLE A BIT -->
				</div>
				<div class="col-md-3">
					<img src="<?php echo base_url('img/me.jpg')?>" class="img-fluid rounded-circle">

				</div>
				<div class="col-md-7">
					<h2 class="mt-3">Ihsan Fajari</h2>
					<p>
						Memiliki visi untuk membuat Tasikmalaya lebih maju, dimulai dari sisi digital. Sistem informasi rekomendasi pariwisata ini diharapkan
						dapat memudahkan pencarian dan perekomendasian dalam pariwisata yang ada di Tasikmalaya.
					</p>
					<p><a class="btn btn-teal" href="https://linkedin.com/in/ihsanfajari/" target="_blank" role="button">More about me &raquo;</a></p>
				</div>
			</div>
		</div>
	</div>

</main>

<div class="container">
	<div class="row">
		<div class="col">
			<p class="float-right">
			</p>
		</div>
	</div>
</div>

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
