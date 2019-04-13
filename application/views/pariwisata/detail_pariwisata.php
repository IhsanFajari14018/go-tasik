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

<body>
	<!-- NAVBAR -->
	<?php $this->load->view("_partials/navbar.php") ?>
	<!-- END OF NAVBAR -->

	<main role="main">
		<div class="album py-5">
			<div class="container">

				<!-- SETELAH MENGISI KOMENTAR -->
				<?php if($this->session->success){?>
					<div class="alert alert-success " role="alert">
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
									$harga = " ".$detail_pariwisata->harga_terendah.",- /org";
								}?>
								<h5 class="featurette-heading"><span class="text-muted font-weight-bolder">Harga</span></h5>
								<p class="lead mb-0">Tiket: <?php echo $harga; ?> </p>
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

					<?php foreach($data_pariwisata as $d){ ?>

						<div class="col-md-4">
							<div class="card mb-4 shadow-sm">
								<img src="<?php echo base_url($d->foto); ?>" class="img-fluid" alt="" style="height:200px; width:auto;">
								<div class="card-body">
									<h4 class="card-title"><?php echo $d->nama; ?></h4>
									<?php if($tipe_pariwisata=='kuliner'){ ?>
										<small class="text-muted"><?php echo $d->deskripsi; ?></small>
										<p class="card-text">
											Harga: <?php echo $d->harga; ?>,-/porsi
										</p>
									<?php } ?>

								</div>
							</div>
						</div>

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

</html>
</body>
