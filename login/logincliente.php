<?php
include("../app/config.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo APP_NAME; ?></title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo $URL;?>/public/templeates/AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo $URL;?>/public/templeates/AdminLTE-3.2.0/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo $URL;?>/public/templeates/AdminLTE-3.2.0/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">

<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>INCIAR </b>SESION</a>
  </div>
  <!-- /.login-logo -->

  <div class="card">
    <div class="card-body login-card-body">
        <div class="mb-4">
            <a href="<?php echo $URL;?>"> <button type="button"  class="btn btn-outline-secondary btn-sm">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z"></path>
            </svg>
            <span class="visually-hidden"></span>
            </button> </a>
        </div>
      <center><img src="<?php echo $URL;?>/private/img/logologin.png" width="50%" alt=""></center>
      <p class="login-box-msg">Ingresa tus datos</p>

      <form action="" method="post">
      <label for="">Correo electronico</label>
        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control" placeholder="Ingresa tu correo..">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>

        <label for="">Contraseña</label>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Ingresa tu Contraseña..">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <hr>
        <button type="submit" class="btn btn-primary" style="width:100%">Ingresar</button>
        <br><br>
        <a href="" class="btn btn-secondary" style="width:100%">Cancelar</a>
      </form>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?php echo $URL;?>/public/templeates/AdminLTE-3.2.0/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo $URL;?>/public/templeates/AdminLTE-3.2.0/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo $URL;?>/public/templeates/AdminLTE-3.2.0/dist/js/adminlte.min.js"></script>
</body>
</html>