<?php
include("conexion.php");
$conn = conectar();
$id = $_GET['id'];
$sql = "SELECT * FROM alumno WHERE id='$id'";
$query = mysqli_query($conn,$sql);
$nombre = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Php - Update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <div class="row" >Datos del Alumno</div>
    <div class="row">
        <form action="update.php" method="post">
        <input type="hidden"
               name="id"
               value="<?php echo  $nombre['id'] ?>">
    Nombre:
     <input type="text"
           name="nombre"
           placeholder="Ingresa tu nombre"
           class="form-control mb-3">
           value="<?php echo $nombre['nombre'] ?>">
    A.materno:
    <input type="text"
           name="apaterno"
           placeholder="Ingresa tu apaterno"
           class="form-control mb-3">
           value="<?php echo $nombre['apaterno'] ?>">
    A.paterno:
    <input type="text"
           name="amaterno"
           placeholder="Ingresa tu amaterno"
           class="form-control mb-3">
           value="<?php echo $nombre['amaterno'] ?>">
    Direccion:
    <input type="text"
           name="direccion"
           placeholder="Ingresa tu direccion"
           class="form-control mb-3">
           value="<?php echo $nombre['direccion'] ?>">
    Ciudad:
    <input type="text"
           name="tel"
           placeholder="Ingresa tu telefono"
           class="form-control mb-3">
           value="<?php echo $nombre['tel'] ?>">
           <button type="button"
                        class="btn btn-success"
                        data-bs-toggle="modal" 
                        data-bs-target="#ActualizaModal">
                    Actualizar
                </button>
<div class="modal fade" id="ActualizaModal" tabindex="-1" aria-labelledby="ActualizaModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ActualizaModalLabel">Confirmación de Actualización</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ¿Seguro que quieres modificar esta información?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <input type="submit" value= "Actualizar" class="btn btn-success btn-block">
      </div>
    </div>
  </div>
</div>
    <a href="index.php" class="btn btn-primary ">
    Regresar
</a>
        </form>
    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</div>
</body>
</html>
