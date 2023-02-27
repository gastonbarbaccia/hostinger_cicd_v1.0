<?php

date_default_timezone_set('America/Mexico_City');


?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Gestión de la privacidad | Trámite nuevo </title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <link rel="stylesheet" href="css/bootstrap.min.css">

  <link rel="icon" type="image/x-icon" href="img/favicon.ico">

  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
</head>
<style>
  @media (min-width: 576px) {
    .col-sm-ggb {
      flex: 0 0 50% !important;
      max-width: 45% !important;
    }
  }

  .form-control {
    width: 200% !important;
  }

  #divs-juntos {
    float: left;
  }

  .text-nowrap {
    white-space: normal !important;
  }

  .form-control-ggb {
    width: 500% !important;
  }

  .border-ggb {
    border-radius: .25rem;
    border: 1px solid #ced4da;
    text-align: center;
  }

  .check {
    width: 20px;
    height: 20px;
  }
</style>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>

      <!-- Right navbar links -->

    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="dashboard.php" class="brand-link">
        <img src="dist/img/nueva_leon.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Panel de gestión</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a href="dashboard.php" class="nav-link">
                <i class="nav-icon fas fa-home"></i>
                <p>
                  Dashboard
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="gestiones_realizadas.php" class="nav-link">
                <i class="nav-icon fas fa-file"></i>
                <p>
                  Gestiones realizadas
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="datos_personales.php" class="nav-link">
                <i class="nav-icon fas fa-user"></i>
                <p>
                  Datos personales
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="index.php" class="nav-link">
                <i class="nav-icon fas fa-sign-out-alt"></i>
                <p>
                  Cerrar sesión
                </p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

      <form action="#" method="post">
        <!-- Datos del reporte -->
        <section class="content">
          
          <br>
          <!-- Tabs de navegacion -->
          <div class="card-body table-responsive p-0">
            <div style="margin-left:3%;margin-right:3%">
              <br>
              <h3><strong>Gestiona Evaluación de Impacto en la protección de datos personales</strong></h3>
              <br>
              <div>
                <strong>1 - Nombre de la evaluación de impacto en la protección de datos personales</strong>
                <p>Denominación de la política, programas, sistema o plataforma informática, aplicación electrónica o cualquier otra tecnología que implique el tratamiento intensivo o relevante de datos personales.</p>
              </div>

              <div>
                <strong>2 - En el tratamiento intensivo o relevante sometido a valoración, ¿Participan dos o más responsables de manera conjunta o coordinada para llevar a cabo el mismo?</strong>
                <br>
                <br>
                <div>
                  <label><input type="radio" value="Si" name="opcion"> Si</label>
                </div>
                <div>
                  <label><input type="radio" value="No" name="opcion"> No</label>
                </div>
              </div>

              <div>
                <strong>3 - Denominación del o los responsables</strong>
                <p>Selecciona el o los sujeto (s) obligados que pretenden someter a valoración su evaluación de impacto.</p>
              </div>

              <div>
                <strong>4 - Persona que elabora la evaluación de impacto en la protección de los datos personales</strong>
                <p>Ingresar los datos de la persona servidora publica designada al interior del sujeto obligado para realizar la evaluación de impacto con los siguientes datos Nombre (s) Apellidos , denominación del cargo o carácter con el que cuenta, área de adscripción, correo electrónico telefono.</p>
                <textarea style="width: 100%;resize: none;height:100px"></textarea>
              </div>
              <br>
              <div>
                <strong>5 - Persona o personas con facultad expresa para revisar la evaluación de impacto en la protección de los datos personales: </strong>
                <p>Ingresar los datos de la o las persona(s) Nombre (s) Apellidos, denominación del cargo o carácter con el que cuenta, área de adscripción.</p>
                <textarea style="width: 100%;resize: none;height:100px"></textarea>
              </div>
              <br>
              <div>
                <strong>6 - Persona o personas con facultad expresa para aprobar evaluación de impacto en la protección de los datos personales:</strong>
                <p>Ingresar los datos de la o las personas Nombre (s) Apellidos , denominación del cargo o carácter con el que cuenta, área de adscripción.</p>
                <textarea style="width: 100%;resize: none;height:100px"></textarea>
              </div>
              <br>
              <div class="form-group" style="float: right;margin-right:5%">
                <button class="btn btn-primary" type="submit">Guardar</button>
              </div>
              <div class="form-group" style="float: right;margin-right:5%">
                <a class="btn btn-primary" type="text" href="dashboard.php">Cancelar</a>
              </div>

            </div>
      </form>
    </div>
    <!-- Fin del contenido del tab -->
    </section>
    <!-- Fin de seccion -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-<?php echo date('Y') ?> <a href="#" style="color: #054a04"> COTAI</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>V.</b> 1.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->
  <script src="https://cdn.jsdelivr.net/npm/vue"></script>
  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- ChartJS -->
  <script src="plugins/chart.js/Chart.min.js"></script>
  <!-- Sparkline -->
  <script src="plugins/sparklines/sparkline.js"></script>
  <!-- JQVMap -->
  <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="plugins/moment/moment.min.js"></script>
  <script src="plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Summernote -->
  <script src="plugins/summernote/summernote-bs4.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="dist/js/pages/dashboard.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>