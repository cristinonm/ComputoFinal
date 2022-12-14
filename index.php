<?php
    include("conexion.php");
    $conexion = conectar();
    $sql = "SELECT * FROM alumno";
    $ejecutar = mysqli_query($conexion,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BEES GYM</title>
    <link rel="styles" href="style.css/">
    <link rel="shortcut icon" href="images/favico.ico"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body style="background-color:#FFF703">
        <div class="container mt-2">
                <div class="row">
                    <h1 class="text-center">BEES GYM </h1>
                </div>
                <div class="row">
                       <div class="col-md-2 order-2">
                          <div class="row">
                              <h3 class="text-center">Nueva Abeja</h3>
                          </div>
                          <form action="insertar.php" method="post">
                                <input type="text"
                                      name="nombre"
                                      placeholder="Nombre"
                                      class="form-control mb-3">
                                <input type="text"
                                      name="apaterno"
                                      placeholder="Apellido Paterno"
                                      class="form-control mb-3">
                                <input type="text"
                                      name="amaterno"
                                      placeholder="Apellido Materno"
                                      class="form-control mb-3">
                                <input type="text"
                                      name="direccion"
                                      placeholder="Dirección"
                                      class="form-control mb-3">
                                <input type="text"
                                      name="tel"
                                      placeholder="Telefono"
                                      class="form-control mb-3">
                                <input type="submit"
                                      value="Guardar"
                                      class="btn btn-success block">
                          </form>
                       </div>

    
                         <div class ="col-md-10 orde-1 ">
                            <div class="row">
                                <h3 class="text-center">Abejas Inscritas</h3>
                            </div>
                            <table class= "table" style="background-color:#FFFFFF ">
                                      <thead class="table-success table-striped">
                                          <tr>
                                              <th>ID</th>
                                              <th>Nombre</th>
                                              <th>A.Paterno</th>
                                              <th>A.Materno</th>
                                              <th class="text-center">Direccion</th>
                                              <th>Telefono</th>
                                              <th>Acciones</th>
                                          </tr>
                                      </thead>
                                            <tbody>
                                                  <?php
                                                  while($item=mysqli_fetch_array($ejecutar)){
                                                  ?>
                                              <tr>
                                                  <td><?php echo $item['id'] ?></td>
                                                  <td><?php echo $item['nombre'] ?></td>
                                                  <td><?php echo $item['apaterno'] ?></td>
                                                  <td><?php echo $item['amaterno'] ?></td>
                                                  <td><?php echo $item['direccion'] ?></td>
                                                  <td><?php echo $item['tel'] ?></td>
                                                  <td>
                                                      <a href="actualizar.php?id=<?php echo $item['id'] ?>"
                                                        class="btn btn-warning">Editar</a>
                                                      <button type="button"
                                                              class="btn btn-danger"
                                                              data-bs-toggle="modal" 
                                                              data-bs-target="#borrarModal"> 
                                                              Borrar
                                                      </button>
                                                    </td>
                                                  <div class="modal fade" id="borrarModal" tabindex="-1" aria-labelledby="borrarModalLabel" aria-hidden="true">
                                                      <div class="modal-dialog">
                                                        <div class="modal-content">
                                                              <div class="modal-header">
                                                                <h5 class="modal-title" id="borrarModalLabel">Confirmación</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                              </div>
                                                              <div class="modal-body">
                                                              ¿Seguro que quieres eliminar esta información?
                                                              </div>
                                                              <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                                                <a href="borrar.php?id=<?php echo $item['id'] ?>" class="btn btn-danger">Eliminar definitivamente</a>
                                                              </div>
                                                        </div>
                                                      </div>
                                                  </div>
                                                </tr>
                                              <?php
                                                  }
                                                  ?>
                                            </tbody>
                              </table>
                         </div>
     

  
     
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
