<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Gestión de la privacidad </title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="css/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <link rel="icon" type="image/x-icon" href="img/favicon.ico">
</head>

<body class="hold-transition login-page" style="background-image: url('img/wallpaper.jpg');background-size:cover;">
  <div class="login-box">

    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
        <div class="login-logo">
          <div>
            <b style="font-size:25px"><img src="img/logo_login.PNG" width="30px" height="60px" style="margin-right:5%">Gestiona</b>
            <br>
            <b style="font-size:20px">Evaluación de impacto a la privacidad</b>
          </div>
        </div>
        <br>
        <form action="dashboard.php" method="post">
          <div class="input-group mb-3">
            <input name="username" type="text" class="form-control" placeholder="Usuario">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input name="password" type="password" class="form-control" placeholder="Contraseña">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <br>
          <div class="row">
            <!-- /.col -->
            <div class="col-12">
              <button type="submit" class="btn btn-primary btn-block" style="color:white;background-color: #054a04;border-color:#054a04 ">Iniciar Sesión</button>
            </div>
            <!-- /.col -->
          </div>
        </form>
        <br>
      </div>
      <!-- /.login-card-body -->
    </div>
  </div>
  <!-- /.login-box -->

  <!-- jQuery -->
  <script src="../../plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../../dist/js/adminlte.min.js"></script>

</body>

</html>