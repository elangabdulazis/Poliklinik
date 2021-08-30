<?php  ?>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Registration Page</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=base_url('assets/'); ?>plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?=base_url('assets/'); ?>https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?=base_url('assets/'); ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url('assets/'); ?>dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="<?=base_url('assets/'); ?>https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="register-page " style="min-height: 586.8px ;">
<div class="register-box mx-auto">
  <div class="register-logo">
    <a><b>Admin</b>LTE</a>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Register a new membership</p>

      <form action="<?php echo base_url('login/registration') ?>" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Full name" name="nama" id="nama" value="<?= set_value('nama'); ?>">
          <div class="input-group-append" >
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div> 
        </div>
        <?= form_error('nama','<small class="text-danger pl-3">','</small>'); ?>
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email" name="email" id="email" value="<?= set_value('email'); ?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <?= form_error('email','<small class="text-danger pl-3">','</small>'); ?>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password" id="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <?= form_error('password','<small class="text-danger pl-3">','</small>'); ?>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Retype password" name="password2" id="password2">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="terms" value="agree">
              <label for="agreeTerms">
               I agree to the <a href="#">terms</a>
              </label>
            </div>
          </div>
          
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
          </div>
          <div class="text-center">
            <a class="small" href="<?= base_url('login'); ?>" >Al ready create acount? Login!</a>
          </div>
          <!-- /.col -->
        </div>
      </form>

  

     
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>


<iframe id="mc-sidebar-container" __idm_frm__="146" style="top: 0px; padding: 0px; margin: 0px; z-index: 2147483646; position: fixed; border: none; opacity: 0; left: auto; right: 0px; display: block; max-width: none; transition: width 0s ease 0.4s, height 0s ease 0.4s, opacity 0.4s ease 0s, transform 0.4s ease 0s; transform: translate3d(400px, 0px, 0px); width: 400px; height: 0px;"></iframe><iframe id="mc-topbar-container" __idm_frm__="147" style="top: 0px; padding: 0px; margin: 0px; z-index: 2147483646; position: fixed; border: none; opacity: 0; left: 0px; display: block; max-height: none; transition: width 0s ease 0.4s, height 0s ease 0.4s, opacity 0.4s ease 0s, transform 0.4s ease 0s; transform: translate3d(0px, -50px, 0px); height: 50px; width: 0px;"></iframe><iframe id="mc-toast-container" __idm_frm__="148" style="bottom: 0px; right: 0px; padding: 0px; margin: 0px; z-index: 2147483640; position: fixed; border: none; opacity: 0; display: block; height: 0px; width: 0px;"></iframe><iframe id="mc-download-overlay-container" __idm_frm__="149" style="bottom: 0px; right: 0px; padding: 0px; margin: 0px; z-index: 2147483640; position: fixed; border: none; opacity: 0; display: block; height: 0px; width: 0px;"></iframe></body></html>