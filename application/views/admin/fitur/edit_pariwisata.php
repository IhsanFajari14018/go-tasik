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

				<?php if ($this->session->flashdata('success')): ?>
					<div class="alert alert-success" role="alert">
						<?php echo $this->session->flashdata('success'); ?>
					</div>
				<?php endif; ?>

				<!-- Card  -->
				<div class="card mb-3">
					<div class="card-header">
						<h4>Perbaharui Pariwisata</h4>
						<div class="text-muted mt-3">
							<span class="text-danger font-weight-bolder">*</span> required fields
						</div>
					</div>
					<div class="card-body">

						<form action="<?php base_url('admin/pariwisata/edit') ?>" method="post" enctype="multipart/form-data">

							<div class="form-group">
								<label>Nama <span class="text-danger font-weight-bolder">*</span></label>
								<input name="nama" type="text" class="form-control <?php echo form_error('nama') ? 'is-invalid':'' ?>" value="<?php echo ($pariwisata->nama)?>"/>
								<div class="invalid-feedback">
									<?php echo form_error('nama') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Deskripsi <span class="text-danger font-weight-bolder">*</span></label>
								<textarea name="deskripsi" class="form-control <?php echo form_error('deskripsi') ? 'is-invalid':'' ?>"><?php echo ($pariwisata->deskripsi)?></textarea>
								<div class="invalid-feedback">
									<?php echo form_error('deskripsi') ?>
								</div>
							</div>

							<div class="form-group">
								<label>Alamat <span class="text-danger font-weight-bolder">*</span></label>
								<input name="alamat" type="text" class="form-control <?php echo form_error('alamat') ? 'is-invalid':'' ?>" value="<?php echo ($pariwisata->alamat)?>"/>
								<div class="invalid-feedback">
									<?php echo form_error('alamat') ?>
								</div>
							</div>

							<div class="form-group">
								<label>Telepon</label>
								<input name="telepon" type="text" class="form-control" value="<?php echo ($pariwisata->telepon)?>"/>
							</div>

							<div class="form-group">
								<label>Email</label>
								<input name="email" type="text" class="form-control" value="<?php echo ($pariwisata->email)?>"/>
							</div>

							<div class="form-group">
								<label>Jam Buka <span class="text-danger font-weight-bolder">*</span></label>
								<input name="buka" type="text" class="form-control <?php echo form_error('buka') ? 'is-invalid':'' ?>" value="<?php echo ($pariwisata->buka)?>"/>
								<div class="invalid-feedback">
									<?php echo form_error('buka') ?>
								</div>
							</div>

							<div class="form-group">
								<label>Kategori <span class="text-danger font-weight-bolder">*</span></label>
								<select name="kategori" class="custom-select <?php echo form_error('kategori') ? 'is-invalid':'' ?>" value="<?php echo ($pariwisata->kategori)?>">
									<option value="">Pilih kategori</option>
									<option value="air-terjun-dan-sungai">Air Terjun & Sungai</option>
									<option value="danau">Danau</option>
									<option value="gunung">Gunung</option>
									<option value="kolam-renang">Kolam Renang</option>
									<option value="pantai">Pantai</option>
									<option value="wisata-lainnya">Wisata Lainnya</option>
									<option disabled="disabled">-------------------------------------------------------------------------------------------------------------------------------------------------</option>
									<option value="bubur-ayam">Bubur Ayam</option>
									<option value="kupat-tahu">Kupat Tahu</option>
									<option value="mie-bakso">Mie Bakso</option>
									<option value="soto">Soto</option>
									<option value="kuliner-lainnya">Kuliner Lainnya</option>
								</select>
								<div class="invalid-feedback">
									<?php echo form_error('kategori') ?>
								</div>
							</div>

							<div class="form-group">
								<label>URL Map <span class="text-danger font-weight-bolder">*</span></label>
								<input name="url_map" type="text" class="form-control <?php echo form_error('url_map') ? 'is-invalid':'' ?>" value="<?php echo ($pariwisata->url_map)?>"/>
								<div class="invalid-feedback">
									<?php echo form_error('url_map') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Foto Utama</label>
								<input type="file" name="foto" class="form-control-file"/>
								<input type="hidden" name="old_foto" value="<?php echo ($pariwisata->foto) ?>" />
							</div>

							<div class="form-group text-center">
								<input class="btn btn-success" type="submit" name="btn" value="Save" style="width:110px;"/>
							</div>
						</form>

					</div>

					<div class="card-footer small text-muted">
						<span class="text-danger font-weight-bolder">*</span> required fields
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
