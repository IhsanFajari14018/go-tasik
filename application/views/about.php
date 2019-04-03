<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>go tasik - Pariwisata</title>

	<!-- CSS & JS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

	<!-- FA ICON -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<style>
		.container {
			max-width: 960px;
		}

		/*
		* Custom translucent site header
		*/

		.site-header {
			background-color: rgba(0, 0, 0, .85);
			-webkit-backdrop-filter: saturate(180%) blur(20px);
			backdrop-filter: saturate(180%) blur(20px);
		}
		.site-header a {
			color: #999;
			transition: ease-in-out color .15s;
		}
		.site-header a:hover {
			color: #fff;
			text-decoration: none;
		}

		/*
		* Dummy devices (replace them with your own or something else entirely!)
		*/

		.product-device {
			position: absolute;
			right: 10%;
			bottom: -30%;
			width: 300px;
			height: 540px;
			background-color: #333;
			border-radius: 21px;
			-webkit-transform: rotate(30deg);
			transform: rotate(30deg);
		}

		.product-device::before {
			position: absolute;
			top: 10%;
			right: 10px;
			bottom: 10%;
			left: 10px;
			content: "";
			background-color: rgba(255, 255, 255, .1);
			border-radius: 5px;
		}

		.product-device-2 {
			top: -25%;
			right: auto;
			bottom: 0;
			left: 5%;
			background-color: #e5e5e5;
		}


		/*
		* Extra utilities
		*/

		.flex-equal > * {
			-ms-flex: 1;
			flex: 1;
		}
		@media (min-width: 768px) {
			.flex-md-equal > * {
				-ms-flex: 1;
				flex: 1;
			}
		}

		.overflow-hidden { overflow: hidden; }

	</style>


</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="<?php echo site_url("home") ?>">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="dropdown08" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Pariwisata
					</a>
					<div class="dropdown-menu" aria-labelledby="dropdown08">
						<a class="dropdown-item" href="<?php echo site_url("wisata_kuliner"); ?>">Wisata Kuliner</a>
						<a class="dropdown-item" href="<?php echo site_url("objek_wisata"); ?>">Objek Wisata</a>
					</div>
				</li>
				<li class="nav-item">
					<a class="nav-link active" href="#">About</a>
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
					<a class="dropdown-item" href="#">Air Terjun</a>
					<a class="dropdown-item" href="#">Alam</a>
					<a class="dropdown-item" href="#">Danau</a>
					<a class="dropdown-item" href="#">Gunung</a>
					<a class="dropdown-item" href="#">Kolam Renang</a>
					<a class="dropdown-item" href="#">Pantai</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="#">Bubur</a>
					<a class="dropdown-item" href="#">Kupat Tahu</a>
					<a class="dropdown-item" href="#">Mie Bakso</a>
					<a class="dropdown-item" href="#">Soto</a>
					<a class="dropdown-item" href="#">Lainnya</a>
				</div>
			</li>
		</ul>
		<!-- END OF DROPDOWN NEAR SEARCH -->

		<form class="input-group mt-3 mr-1" style="width: 55%">
			<input type="text" class="form-control" placeholder="Cari objek wisata">
			<div class="input-group-append">
				<button class="btn btn-secondary" type="button">
					<i class="fa fa-search"></i>
				</button>
			</div>
		</form>
	</nav>

	<main role="main">
		<!-- ABOUT -->
		<section class="jumbotron text-center">
			<div class="container">
				<h1 class="jumbotron-heading">Go-Tasik</h1>
				<p class="lead text-muted">
					Go-Tasik is an information recomendation system in tourism around Tasikmalaya.
				</p>
				<hr>
				<p class="lead text-muted">
					Version 0.4
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
					<p><a class="btn btn-secondary" href="https://linkedin.com/in/ihsanfajari/" target="_blank" role="button">More about me &raquo;</a></p>
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

</body>
</html>
