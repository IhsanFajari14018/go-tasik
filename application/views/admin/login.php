<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?php echo SITE_NAME .": ". ucfirst($this->uri->segment(1)) ?></title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url(); ?>lib-admin/assets/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url(); ?>lib-admin/css/sb-admin.css" rel="stylesheet">

</head>

<body class="bg-dark">

  <div class="container" style="margin-top:160px">
    <div class="card card-login mx-auto">
      <div class="card-header">Login Admin</div>
      <div class="card-body">

        <?php echo form_open('admin/login/verifikasi'); ?>
        <div class="form-group">
          <div class="form-label-group">
            <input type="text" name="username" id="inputUsername" class="form-control" placeholder="Username" value="<?=set_value('username')?>" required="required" autofocus="autofocus">
            <label for="inputUsername">Username</label>
          </div>
        </div>
        <div class="form-group">
          <div class="form-label-group">
            <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required="required">
            <label for="inputPassword">Password</label>
          </div>
        </div>
        <div class="form-group">
          <div class="checkbox">
          </div>
        </div>
        <button type="submit" name="submit" class="btn btn-primary btn-block">Login</button>
        <?php echo form_close(); ?>

        <div class="text-center">
          <br> <br>
          <span> © <?php echo Date('Y') ." ". "Copyright"  ?></span>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url(); ?> lib-admin/assets/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?> lib-admin/assets/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url(); ?> lib-admin/assets/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>
