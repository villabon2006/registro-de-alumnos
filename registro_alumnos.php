<?php
require 'Conexion.php';
// Procesar el formulario de registro
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  
  $nombres = $_POST["nombres"];
  $apellidos = $_POST["apellidos"];
  $t_doc = $_POST["t_doc"];
  $documento = $_POST["documento"];
  $email = $_POST["email"];
  $telefono = $_POST["telefono"];
  $genero = $_POST["genero"];
  $fecha = $_POST["fecha_nacimiento"];
  $grado = $_POST["grado"];

  // Insertar el nuevo usuario en la base de datos
  $sql = "INSERT INTO alumnos(nombres, apellidos,  t_doc, documento, email, telefono, genero, fecha_nacimiento, id_grado) VALUES ('$nombres', '$apellidos', '$t_doc', '$documento', '$email', '$telefono', '$genero', '$fecha', '$grado')";

  if ($conn->query($sql) === TRUE) {
  echo "Nuevo alumno registrado con exito ";
  } else {
      echo "Error al registrar alumno: " . $conn->error;
  }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Registro de alumnos</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

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

      <h1 class="logo me-auto me-lg-0"><a href="dasboard.html" id="logito">COCODOSA</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0  text-center">
        
        <i class="bi bi-list mobile-nav-toggle"></i>
        <ul>
        <li><a class="nav-link scrollto" href="dasboard.php">Listado de alumnos alumnos</a></li>
          <li><a class="nav-link scrollto active" href="registro_alumnos.php">Registro de alumnos</a></li>
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
        <!-- ... (código del formulario) -->
        <div class="dialog">
          <div class="content">
              <div class="header">
                <h4 class="title">Registro de Estudiantes</h4>
              </div>
              <!--form-->
              <br><br>
                <div class="card-body container">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                      <form method="post" class="form" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                        <label for="exampleInputNombres">Nombres</label>
                        <input type="text" class="form-control" id="exampleInputNombres" placeholder="Escribir nombres" name="nombres">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="exampleInputApellidos">Apellidos</label>
                        <input type="text" class="form-control" id="exampleInputApellidos" placeholder="Escribir apellidos" name="apellidos">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="input-group">
                      <div class="col-md-4">
                        <label for="tipo_documento">Tipo de Documento</label>
                        <select class="form-select" name="t_doc" aria-label="Default select example">
                        <option selected>Documento</option>
                        <option value="1">TI</option>
                        <option value="2">CC</option>
                        <select></div>

                        <div class=" col-md-8">
                        <label for="exampleInputApellidos">Numero de documento</label>
                    <input type="number" aria-label="documento"name="documento" class="form-control" placeholder="Numero de documento" id="documento" required>
                  </div>
                  </div>
                  </div>
<br>
                  

                  <div class="form-grup col-md-12">
                    <label for="exampleInputEmail">Correo electronico</label>
                    <input type="text" class="form-control" id="exampleInputEmail" placeholder="Escribir Correo electronico" name="email">
                  </div>
<br>
                  <div class="form-grup col-md-12">
                    <label for="exampleInputCel">Celular</label>
                    <input type="number" class="form-control" id="exampleInputCel" placeholder="Escribir numero de celular" name="telefono">
                  </div>
<br>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="tipo_documento">Genero</label>
                        <br><input required type="radio" name="genero" value="M"> Masculino
                        <input type="radio" name="genero" required value="F"> Femenino
                      </div>
                    </div>
                  </div>
                  <br>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="genero">Fecha de nacimiento</label>
                          <input type="date" id="fecha" name="fecha_nacimiento" required>
                          <script> 
                            function mostrarFecha() {
                              var fecha = document.getElementById("fecha").value; 
                            alert("La fecha seleccionada es: " + fecha); 
                            }
                          </script>
                      </div>
                    </div>
                  </div>
                  <br>  
                  <div class="row">
                    <div class="col-md-12">
                      <select class="form-control" name="grado">
                        <option selected disabled>Grado</option>
                          <?php
                            include 'conexion.php';

                            $sql = $conn->query("SELECT * FROM grados");
                            while ($resultado = $sql->fetch_assoc()) {
                              echo "<option value='".$resultado['Id']."'>".$resultado['nombre']."</option>";
                            }
                          ?>
                              </select>
                    </div>
                  </div>
                <br>
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                  <button type="submit" class="btn btn-primary">Registrar</button>
              </div>
              </div>
          </div>
        </div>
  <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
  

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