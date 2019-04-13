<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body id="page-top">

	<?php $this->load->view("admin/_partials/navbar.php") ?>
	<div id="wrapper">

		<?php $this->load->view("admin/_partials/sidebar.php") ?>

		<div id="content-wrapper">

			<div class="container-fluid">

				<?php $this->load->view("admin/_partials/breadcrumb.php") ?>

				<!-- DataTables -->
				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('admin/pariwisata/add') ?>"><i class="fas fa-plus"></i> Add New Pariwisata</a>
					</div>
					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>Tanggal</th>
										<th>Pariwisata</th>
										<th>Nama</th>
										<th>Ulasan</th>
										<th>Rating</th>
										<th>Status</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody>

									<?php foreach ($daftar_ulasan as $d): ?>
										<tr>
											<td>
												<?php echo $d->tanggal ?>
											</td>
											<td>
												<?php echo $d->nama_pariwisata ?>
											</td>
											<td>
												<?php echo $d->nama ?>
											</td>
											<td>
												<?php echo $d->ulasan ?>
											</td>
											<td>
												<?php echo $d->rating ?>
											</td>
											<td>
												<?php if($d->ditampilkan == "1"){ ?>
													<div class="bg-success text-center text-light" style="border-radius: 15px;">
														<?php echo "shown" ?>
													</div>
												<?php }else{ ?>
													<div class="bg-danger text-center text-light" style="border-radius: 15px;">
														<?php echo "hidden" ?>
													</div>
												<?php } ?>

											</td>
											<td width="250">
												<a onclick="deleteConfirm('<?php echo site_url('admin/Ulasan/delete/'.$d->id_review) ?>')" href="#!" class="btn btn-small text-danger">
													<i class="fas fa-trash"></i>
													Delete
												</a>
												<?php if($d->ditampilkan == "1"){ ?>
													<a onclick="sembunyikanConfirm('<?php echo site_url('admin/Ulasan/setStatusHidden/'.$d->id_review) ?>')" href="#!" class="btn btn-small text-warning">
														<i class="fas fa-info-circle"></i>
														Sembunyikan
													</a>
												<?php }else{ ?>
													<a onclick="tampilkanConfirm('<?php echo site_url('admin/Ulasan/setStatusShown/'.$d->id_review) ?>')" href="#!" class="btn btn-small text-info">
														<i class="fas fa-info-circle"></i>
														Tampilkan
													</a>
												<?php } ?>
											</td>
										</tr>
									<?php endforeach; ?>

								</tbody>
							</table>
						</div>
					</div>
				</div>

			</div>
			<!-- /.container-fluid -->

			<!-- Sticky Footer -->
			<?php $this->load->view("admin/_partials/footer.php") ?>

		</div>
		<!-- /.content-wrapper -->

	</div>
	<!-- /#wrapper -->


	<?php $this->load->view("admin/_partials/scrolltop.php") ?>
	<?php $this->load->view("admin/_partials/modal.php") ?>
	<?php $this->load->view("admin/_partials/js.php") ?>


	<script>
	function deleteConfirm(url){
		$('#btn-delete').attr('href', url);
		$('#deleteModal').modal();
	}

	function sembunyikanConfirm(url){
		$('#btn-sembunyikan').attr('href', url);
		$('#sembunyikanModal').modal();
	}

	function tampilkanConfirm(url){
		$('#btn-tampilkan').attr('href', url);
		$('#tampilkanModal').modal();
	}
</script>

</body>

</html>
