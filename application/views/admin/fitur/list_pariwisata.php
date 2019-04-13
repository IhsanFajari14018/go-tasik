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
										<th>id</th>
										<th>nama</th>
										<th>deskripsi</th>
										<th>alamat</th>
										<th>telepon</th>
										<th>email</th>
										<th>buka</th>
										<th>kategori</th>
										<!-- <th>URL Map</th> -->
										<th>foto</th>
										<th>aksi</th>
									</tr>
								</thead>
								<tbody>

									<?php foreach ($daftar_pariwisata as $d): ?>
										<tr>
											<td>
												<?php echo $d->id_pariwisata ?>
											</td>
											<td>
												<?php echo $d->nama ?>
											</td>
											<td>
												<?php echo substr($d->deskripsi,0,100)." ..." ?>
											</td>
											<td>
												<?php echo $d->alamat ?>
											</td>
											<td>
												<?php echo $d->telepon ?>
											</td>
											<td>
												<?php echo $d->email ?>
											</td>
											<td>
												<?php echo $d->buka ?>
											</td>
											<td>
												<?php echo $d->kategori ?>
											</td>
											<!-- <td> -->
												<?php //echo $d->url_map ?>
											<!-- </td> -->
											<td>
												<img src="<?php echo base_url($d->foto) ?>" width="64" />
											</td>
											<td width="250">
												<a href="<?php echo site_url('admin/pariwisata/info/'.$d->id_pariwisata) ?>" class="btn btn-small text-info">
													<i class="fas fa-info-circle"></i>
													Info
												</a>
												<a href="<?php echo site_url('admin/Detail/add/'.$d->id_pariwisata) ?>" class="btn btn-small text-success">
													<i class="fas fa-plus-circle"></i>
													Add
												</a>
												<a href="<?php echo site_url('admin/pariwisata/edit/'.$d->id_pariwisata) ?>" class="btn btn-small">
													<i class="fas fa-edit"></i>
													Edit
												</a>
												<a onclick="deleteConfirm('<?php echo site_url('admin/pariwisata/delete/'.$d->id_pariwisata) ?>')" href="#!" class="btn btn-small text-danger">
													<i class="fas fa-trash"></i>
													Delete
												</a>
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
</script>

</body>

</html>
