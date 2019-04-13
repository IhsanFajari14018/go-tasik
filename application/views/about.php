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
				<h1 class="jumbotron-heading white-text">Go-Tasik</h1>
				<p class="lead white-text">
					Go-Tasik is an information recomendation system in tourism around Tasikmalaya.
				</p>
				<hr>
				<p class="lead white-text">
					Version 0.7
				</p>
			</div>
		</section>

		<div class="container">
			<div class="row">
				<div class="col-md-2">
					<!-- PUSH CONTENT TO MIDDLE A BIT -->
				</div>
				<div class="col-md-3">
					<img src="https://media.licdn.com/dms/image/C5103AQG61uR6e7OkTw/profile-displayphoto-shrink_200_200/0?e=1556755200&v=beta&t=P4gU6UhfQLOt3atflfv89K5pxlemYqTaScCwBio3Uxw" class="img-fluid rounded-circle">

				</div>
				<div class="col-md-7">
					<h2 class="mt-3">Ihsan Fajari</h2>
					<p>
						Memiliki visi untuk membuat Tasikmalaya lebih maju, dimulai dari sisi digital. Sistem informasi rekomendasi pariwisata ini diharapkan
						dapat memudahkan pencarian dan perekomendasian dalam pariwisata di sekitar Tasikmalaya.
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
