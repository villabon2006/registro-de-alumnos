<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Registro de alumnos</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Restaurantly
  * Updated: Sep 20 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/restaurantly-restaurant-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-center justify-content-md-between">

      <div class="contact-info d-flex align-items-center">
      
      </div>

      <div class="languages d-none d-md-flex align-items-center">
        
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-cente">
    <div class="container-fluid nav-custom d-flex align-items-center  justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="index.html" id="logito">COCODOSA</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0  text-center">
        
        <i class="bi bi-list mobile-nav-toggle"></i>
        <ul>
        <li><a class="nav-link scrollto active" href="index.php">Listado de alumnos alumnos</a></li>
          <li><a class="nav-link scrollto" href="registro_alumnos.php">Registro de alumnos</a></li>
          <li><a class="nav-link scrollto" href="#menu">Costos Educativos</a></li>
          <li><a class="nav-link scrollto" href="#specials">Quienes Somos</a></li>
          <li><a class="nav-link scrollto" href="#events">Conmemoraciones</a></li>
          <li><a class="nav-link scrollto" href="#gallery">Galeria</a></li>
        </ul>
      
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header --><!-- End Header -->

<br>
<br>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <!-- ... (código de la cabecera) -->
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Alumnos</h1>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>


    <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Estudiantes Registrados</h3>
            </div>
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <!-- ... (código de las cabeceras de la tabla) -->
                  <tr>
                    <th>Id</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Tipo documento</th>
                    <th>Documento</th>
                    <th>Email</th>
                    <th>Telefono</th>
                    <th>Genero</th>
                    <th>Fecha de nacimiento</th>
                    <th>Grado</th>
                    <th>Acciones</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  require 'conexion.php';
                  $sql = $conn->query("SELECT alumnos.Id_alumno, alumnos.nombres, alumnos.apellidos, alumnos.t_doc, alumnos.documento, alumnos.email, alumnos.telefono, alumnos.genero, alumnos.fecha_nacimiento, grados.nombre AS nombre_grado
                  FROM alumnos
                  INNER JOIN grados ON alumnos.id_grado = grados.Id");
                  while ($resultado = $sql->fetch_assoc()) {
                  ?>
                  <tr>
                    <!-- ... (código de las filas de la tabla) -->
                      <th scope="row"><?php echo $resultado['Id_alumno']?></th>
                      <th scope="row"><?php echo $resultado['nombres']?></th>
                      <th scope="row"><?php echo $resultado['apellidos']?></th>
                      <th scope="row"><?php echo $resultado['t_doc']?></th>
                      <th scope="row"><?php echo $resultado['documento']?></th>
                      <th scope="row"><?php echo $resultado['email']?></th>
                      <th scope="row"><?php echo $resultado['telefono']?></th>
                      <th scope="row"><?php echo $resultado['genero']?></th>
                      <th scope="row"><?php echo $resultado['fecha_nacimiento']?></th>
                      <th scope="row"><?php echo $resultado['nombre_grado']?></th>
                      <th>
                      <a href="Editar.php?Id=<?php echo $resultado['Id_alumno']?>" class="btn btn-warning">Editar</a>
                      <a href="EliminarDatos.php?Id=<?php echo $resultado['Id_alumno']?>" class="btn btn-danger" onclick="return confirmacion()">Retirar</a></th>
                  </tr>
                  <?php
                  }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
</div>
<br>
<br>


  <!-- ======= Footer ======= -->
  <footer id="footer" >
    <div class="container">
      <div class="copyright">
        &copy; Desarrollado por <strong><span>ADSO. </span></strong> Ficha: 2502629
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/restaurantly-restaurant-template/ -->
        <a href="https://www.facebook.com/cadphgarzon?mibextid=ZbWKwL">@Sena</a>
      </div>
    </div>
  </footer><!-- End Footer --><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>