<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("admin/_partials_dashboard/head.php") ?>
</head>

<body id="page-top">

	<?php $this->load->view("admin/_partials_dashboard/navbar.php") ?>
	<div id="wrapper">

		<?php $this->load->view("admin/_partials_dashboard/sidebar.php") ?>

		<div id="content-wrapper">

			<div class="container-fluid">

				<?php if ($this->session->flashdata('success')): ?>
					<div class="alert alert-success" role="alert">
						<?php echo $this->session->flashdata('success'); ?>
					</div>
				<?php endif; ?>

				<!-- Card  -->
				<div class="card mb-3">
					<div class="card-header">
						<h4>Perbaharui Data Detail</h4>
						<div class="text-muted mt-3">
							<span class="text-danger font-weight-bolder">*</span> bagian yang harus diisi
						</div>
					</div>
					<div class="card-body">

						<form action="<?php base_url('admin/Detail/edit/'.$id_detail.'/'.$fk_pariwisata) ?>" method="post" enctype="multipart/form-data">

              <div class="form-group">
                <label>Nama <span class="text-danger font-weight-bolder">*</span></label>
                <input name="nama" type="text" class="form-control <?php echo form_error('nama') ? 'is-invalid':'' ?>" value="<?php echo $detail->nama; ?>"/>
                <div class="invalid-feedback">
                  <?php echo form_error('nama') ?>
                </div>
              </div>

              <div class="form-group">
                <label>Deskripsi</label>
                <input name="deskripsi" type="text" class="form-control" value="<?php echo $detail->deskripsi; ?>"/>
              </div>

              <div class="form-group">
                <label>Harga</label>
                <input name="harga" type="text" class="form-control" value="<?php echo $detail->harga; ?>"/>
              </div>

							<div class="form-group">
								<label for="name">Foto Utama</label>
								<input type="file" name="foto" class="form-control-file"/>
								<input type="hidden" name="old_foto" value="<?php echo ($detail->foto) ?>" />
							</div>

							<div class="form-group text-center">
								<input class="btn btn-success" type="submit" name="btn" value="Simpan" style="width:110px;"/>
							</div>
						</form>

					</div>

					<div class="card-footer small text-muted">
						<span class="text-danger font-weight-bolder">*</span> bagian yang harus diisi
					</div>


				</div>
				<!-- /.container-fluid -->

				<!-- Sticky Footer -->
				<?php $this->load->view("admin/_partials_dashboard/footer.php") ?>

			</div>
			<!-- /.content-wrapper -->

		</div>
		<!-- /#wrapper -->

		<?php $this->load->view("admin/_partials_dashboard/scrolltop.php") ?>
		<?php $this->load->view("admin/_partials_dashboard/modal.php") ?>
		<?php $this->load->view("admin/_partials_dashboard/js.php") ?>

	</body>

	</html>
