<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $title; ?></title>

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

	/*Hide Kategori when in mobile view*/
	@media (max-width: 767px) {
		.btn-group-hidden .dropdown-menu {
			display: inline-block;
			box-shadow: none;
			border: none;
			position: relative;
		}
		.btn-group-hidden .dropdown-menu li:not(:first-child) {
			display: none;
		}
		/**For Styling Only**/
		.btn-group-hidden .dropdown-menu > li:first-child {
			border: 1px solid #ccc;
			border-radius: 3px;
			text-align: center;
			width: auto;
		}
	}

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
				<li class="nav-item dropdown active">
					<a class="nav-link dropdown-toggle" href="#" id="dropdown08" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Objek Wisata
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
		<!--LIST OBJEK WISATA -->
		<div class="album py-5">
			<div class="container">
				<!-- Description -->
				<div class="row featurette">
					<div class="col-md-7">
						<h2 class="featurette-heading">
							Lembah Gunung Galunggung
							<!-- <span class="text-muted"></span> -->
						</h2>
						<p class="lead">
							Gunung Galunggung merupakan gunung berapi dengan ketinggian 2.167 meter di atas permukaan laut,
							terletak sekitar 17 km dari pusat kota Tasikmalaya. Untuk mencapai puncak Galunggung,
							dibangun sebuah tangga yang memiliki 620 anak tangga. Objek yang lainnya seluas
							kurang lebih 3 hektar berupa pemandian air panas (Cipanas) lengkap dengan fasilitas kolam renang,
							kamar mandi dan bak rendam air panas.
						</p>
					</div>
					<div class="col-md-5">
						<img src="https://lh5.googleusercontent.com/p/AF1QipMlZx50XTvsdLrd7vRqjUqQI_G_kBkmDRWMH_e7=w408-h272-k-no" class="img-fluid rounded" alt="-">
					</div>
				</div>
				<!-- END OF Description -->

				<!-- Pricing -->
				<div class="row featurette mt-2">
					<div class="col-md-5">
						<h5 class="featurette-heading"><span class="text-muted">Lokasi</span></h5>
						<a href="https://goo.gl/maps/MeuNXhyqgFN2" target="_blank"><i class="fa fa-map-marker"></i> Linggawangi, Leuwisari, Tasikmalaya, Jawa Barat</a>
					</div>
					<div class="col-md-4">
						<h5 class="featurette-heading"><span class="text-muted">Harga</span></h5>
						<p class="lead mb-0">Weekdays: Rp 5000,- /org</p>
						<p class="lead mb-0">Weekends: Rp 7000,- /org</p>
					</div>
					<div class="col-md-3">
						<h5 class="featurette-heading"><span class="text-muted">Rating</span></h5>
						<p class="lead"><span class="text-warning font-weight-bold">4.3</span></p>
					</div>
				</div>
				<!-- END OF Pricing -->

				<!-- REVIEW -->
				<div>
					<div class="my-5">
						<hr class="featurette-divider">
					</div>
					<h2 class="featurette-heading">
						Review
					</h2>
					<div class="row">
						<div class="col">
							<p class="featurette-heading mb-0"><span class="text-muted">Oleh </span>Ihsan Fajari</p>
							<p class="featurette-heading"><span class="text-muted">Rating: </span> <span class="text-warning font-weight-bold">4</span></p>
							<p class="featurette-heading">Good place to have a family camp. Has a good enough management of ticketing, security, and parking.</span></p>
							<small><p class="text-muted text-right mb-0">20 February 2019</p></small>
							<!-- <div class="float-right mr-3"> <small class="text-muted text-right">20 February 2019</small> </div> -->
						</div>
					</div>
					<hr class="featurette-divider">

					<div class="row">
						<div class="col">
							<p class="featurette-heading mb-0"><span class="text-muted">Oleh </span>Agus Supardi</p>
							<p class="featurette-heading"><span class="text-muted">Rating: </span><span class="text-warning font-weight-bold">5</span></p>
							<p class="featurette-heading">Mount Galunggung is an active stratovolcano in West Java, Indonesia. It is a part of the Sunda Arch extending through Sumatra, Java and Bali, which has resulted from the subduction of the Australian plate beneath the Eurasian plate. The elevation of this mount is 7,113 ft and the coordinate. 7°15'24'S 108°04'37'E. Mount Galunggung have a beautiful view, you can see view of Tasikmalaya and around on the top.</span></p>
							<small><p class="text-muted text-right mb-0">15 February 2019</p></small>
						</div>
					</div>
					<hr class="featurette-divider">

					<div class="row">
						<div class="col">
							<p class="featurette-heading mb-0"><span class="text-muted">Oleh </span>Nathan</p>
							<p class="featurette-heading"><span class="text-muted">Rating: </span><span class="text-warning font-weight-bold">3</span></p>
							<p class="featurette-heading">Tempatna mayan ngeunaheun jiga di lembur urang, Gunung St. Mary Peak </span></p>
							<small><p class="text-muted text-right mb-0">31 January 2019</p></small>
						</div>
					</div>
					<hr class="featurette-divider">
				</div>

				<!-- END OF REVIEW -->

				<!-- ISI KOMENTAR -->
				<!-- ISI KOMENTAR -->
        <div class="mt-5 mb-3">
          <h2 class="featurette-heading">
            Form untuk mengis ulasan
          </h2>
        </div>

        <form>
          <div class="form-row">
            <div class="col-md-4 mb-3">
              <label for="validationDefault01">Nama</label>
              <input type="text" class="form-control" id="validationDefault01" placeholder="Masukan namamu ..." value="" required>
            </div>
          </div>
          <div class="form-row">
            <div class="col-md-4 mb-3">
              <label for="validationDefault01">Rating</label>
              <select class="custom-select" required>
                <option value="">Beri rating 1-5</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="2">4</option>
                <option value="3">5</option>
              </select>
            </div>
          </div>
          <div class="form-row">
            <div class="col-md-4 mb-3">
              <label for="exampleFormControlTextarea1">Masukan Ulasanmu</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Masukan ulasanmu ..." required></textarea>
            </div>
          </div>
          <div class="form-group">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
              <label class="form-check-label" for="invalidCheck2">
                Agree to terms and conditions
              </label>
            </div>
          </div>
          <button class="btn btn-success" type="submit">Kirim Ulasan</button>
        </form>
        <!-- END OF ISI KOMENTAR -->
				<!-- END OF ISI KOMENTAR -->

				<!-- Recomendation Section -->
				<div class="row">
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
				<!-- END Recomendation Section -->

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

</html>
</body>
