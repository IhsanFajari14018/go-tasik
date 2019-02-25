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
		/* max-width: 960px; */
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
				<li class="nav-item active">
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
					<a class="nav-link" href="<?php echo site_url("about"); ?>">About</a>
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
					<!-- <img src="<?php //echo base_url('img/IMG20190116110221.jpg'); ?>" class="d-block w-100" alt="Curious Rio 2" height="500"> -->
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
		<!-- END OF CAROUSEL -->

		<!-- SEARCH IN THE CENTER -->
		<!-- <div class="container">
		<div class="row">
		<div class="col d-flex justify-content-center">
		<form class="form-inline my-2 my-lg-0">
		<input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
		<button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
	</form>
</div>
</div>
</div> -->

<div class="album mt-1">
	<div class="container">
		<!-- Recomendation Section -->
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
			<!-- END Recomendation Section -->

		</div>
	</div>
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
