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

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Modal -->
      <div class="modal" id="staticBackdrop" aria-labelledby="modal-title" aria-hidden="true">
        <!-- ... (código del modal) -->
        <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Registro de Estudiantes</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            <div class="modal-body">
              <!--form-->
              <form>
                <div class="card-body">

                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
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
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="tipo_documento">Tipo de Documento</label>
                        
                        <label>tipo de documento</label><br><input required type="radio" name="t_doc" value="TI"> Tarjeta de identidad
                        <input type="radio" name="genero" required value="CC"> Cedula de ciudadania
                          <!-- Epacio para seleccinar el tipo de documento -->
                          
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="form-grup">
                    <input type="number" aria-label="documento"name="documento" class="form-control" placeholder="Numero de documento" id="documento" required>
                  </div>

                  <div class="form-grup">
                    <label for="exampleInputEmail">Correo electronico</label>
                    <input type="text" class="form-control" id="exampleInputEmail" placeholder="Escribir Correo electronico" name="email">
                  </div>

                  <div class="form-grup">
                    <label for="exampleInputCel">Celular</label>
                    <input type="number" class="form-control" id="exampleInputCel" placeholder="Escribir numero de celular" name="celular">
                  </div>

                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                      <label for="tipo_documento">Genero</label>
                      <label>Sexo</label><br><input required type="radio" name="genero" value="M"> Masculino
                <input type="radio" name="genero" required value="F"> Femenino
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="genero">Fecha de nacimiento</label>
                          <input type="date" id="fecha" name="fecha" required>
                          <script> 
                            function mostrarFecha() {
                              var fecha = document.getElementById("fecha").value; 
                            alert("La fecha seleccionada es: " + fecha); 
                            }
                          </script>
                      </div>
                    </div>
                  </div>  
                  <div class="row">
                    <div class="col-4">
                      <select class="form-control" name="grado">
                        <option selected disabled>Grado</option>
                          <?php
                            include 'conexion.php';

                            $sql = $conn->query("SELECT * FROM grados");
                            while ($resultado = $sql->fetch_assoc()) {
                              echo "<option value='".$resultado['id']."'>".$resultado['nombre']."</option>";
                            }
                          ?>
                              </select>
                    </div>
                  </div>
                </div>
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                  <button type="submit" class="btn btn-primary">Registrar</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
  <?php
require 'conexion.php';
// Procesar el formulario de registro
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nombres = $_POST["nombres"];
  $apellidos = $_POST["apellidos"];
  $tdoc = $_POST["tipo_documento"];
  $documento = $_POST["documento"];
  $email = $_POST["email"];
  $telefono = $_POST["telefono"];
  $genero = $_POST["genero"];
  $fecha = $_POST["fecha"];
  $grado = $_POST["grado"];

  // Insertar el nuevo usuario en la base de datos
  $sql = "INSERT INTO alumnos(nombres, apellidos,  documento, t_doc, email, telefono, genero, fecha_nacimiento, id_grado,) VALUES ('$nombres', '$apellidos', '$documento', '$t_doc', '$email', '$telefono', '$genero', '$fecha', '$grado')";
  if ($conn->query($sql) === TRUE) {
  echo "Nuevo alumno registrado con exito ";
  } else {
      echo "Error al registrar alumno: " . $conn->error;
  }
}
?>

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
                      <a href="EditarForm.php?Id=<?php echo $resultado['Id_alumno']?>" class="btn btn-warning">Editar</a>
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