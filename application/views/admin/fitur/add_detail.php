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

				<?php $this->load->view("admin/_partials/back.php") ?>

				<div class="row">
					<div class="col-md-10">

						<?php if ($this->session->flashdata('success')): ?>
							<div class="alert alert-success" role="alert">
								<?php echo $this->session->flashdata('success'); ?>
							</div>
						<?php endif; ?>

						<div class="card mb-3">
							<div class="card-header">
								<h4>Tambah Data Detail Pariwisata</h4>
								<div class="text-muted mt-3">
									<span class="text-danger font-weight-bolder">*</span> required fields
								</div>
							</div>
							<div class="card-body">

								<form action="<?php site_url('admin/Detail/add/'.$id); ?>" method="post" enctype="multipart/form-data" >

									<div class="form-group">
										<label>Nama <span class="text-danger font-weight-bolder">*</span></label>
										<input name="nama" type="text" class="form-control <?php echo form_error('nama') ? 'is-invalid':'' ?>"/>
										<div class="invalid-feedback">
											<?php echo form_error('nama') ?>
										</div>
									</div>

                  <div class="form-group">
										<label>Deskripsi</label>
										<input name="deskripsi" type="text" class="form-control"/>
									</div>

                  <div class="form-group">
										<label>Harga</label>
										<input name="harga" type="text" class="form-control"/>
									</div>

									<div class="form-group">
										<label for="name">Foto</label>
										<input type="file" name="foto" class="form-control-file"/>
									</div>

									<div class="form-group text-center">
										<input class="btn btn-success" type="submit" name="btn" value="Save" style="width:110px;"/>
									</div>
								</form>

							</div>

							<div class="card-footer text-muted">
								<span class="text-danger font-weight-bolder">*</span> required fields
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

	</body>

	</html>
