<?php

  include 'Conexion.php';

  if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_GET['Id'])) {
    $id = $_GET['Id'];
    $sql = "SELECT * FROM alumnos WHERE Id_alumno='$id'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $usuario = $result->fetch_assoc();
    } else {
        // Manejar el caso en el que no se encuentra un usuario con ese ID
        echo "Usuario no encontrado.";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['Id_alumno'])) {
    $id = $_POST['Id'];
    $nombres = $_POST["nombres"];
    $apellidos = $_POST["apellidos"];
    $t_doc = $_POST["t_doc"];
    $documento = $_POST["documento"];
    $email = $_POST["email"];
    $telefono = $_POST["telefono"];
    $genero = $_POST["genero"];
    $fecha = $_POST["fecha_nacimiento"];
    $grado = $_POST["grado"];

    $sql = "UPDATE alumnos SET 
                    nombres='$nombres',
                    apellidos='$apellidos',
                    t_doc='$t_doc',
                    documento='$documento',
                    email='$email',
                    telefono='$telefono',
                    genero='$genero',
                    fecha='$fecha',
                    grado='$grado' WHERE id='$id'";



                    if ($conn->query($sql) === TRUE) {
                      header("location:dasboard.php");
                      } else {
                          echo "Error al actualizar datos: " . $conn->error;
                      }
}
?>
<!Doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <h4>Editar datos</h4>
    <br>
    <div class="card-body container">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                      <form method="post" class="form" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                      <?php
            include ('Conexion.php');

            $sql = "SELECT * FROM estudiante WHERE Id =".$_GET['Id'];
            $resultado = $conn->query($sql);

            $row = $resultado->fetch_assoc();
        ?>
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
                            include 'Conexion.php';

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
        
    </form>

</body>
</html>