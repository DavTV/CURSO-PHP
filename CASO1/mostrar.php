<!doctype html>
<html lang="en">
  <head>
    <title>Caso1 mostrar</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

  </head>
  <body>
      <div class="container">
      <div class="menu my-3">
              <a href="index.php">Registar</a>
              <a href="mostrar.php">Datos</a>
              <a href="buscar.php">Buscar</a>
          </div>
          <h1 class="text-center text-primary fw-bold my-4" >Datos de las reparaciones</h1>
      <div class="table-responsive my-3">
          
          <table class="table">
              <thead>
                <tr>
                    <th>Serial</th>
                    <th>Tipo</th>
                    <th>Marca</th>
                    <th>Propietario</th>
                    <th>Teléfono</th>
                    <th>Correo</th>
                    <th>Diagnostico</th>
                    <th>Fecha registro</th>
                    <tr>Eliminar</th>
                </tr>
            </thead>
            <tbody>

                <?php
                    include("PHP/mostrarDatos.php");
                    while($fila = $resultado->fetch_assoc()){
                        ?>
                        
                        <tr>
                            <td scope="row"><?php echo $fila["serial"] ?></td>
                            <td><?php echo $fila["tipo"] ?></td>
                            <td><?php echo $fila["marca"] ?></td>
                            <td><?php echo $fila["propietario"] ?></td>
                            <td><?php echo $fila["telefono"] ?></td>
                            <td><?php echo $fila["correo"] ?></td>
                            <td><?php echo $fila["diagnostico"] ?></td>
                            <td><?php echo $fila["fechaRegistro"] ?></td>
                            <td><a class="btn btn-danger" href="PHP/eliminar.php?id=<?php echo $fila["id"] ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                            <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                            </svg></a></td>



                        </tr>
                        
                        <?php
                    }
                
                
                ?>
                </tbody>
                </div>
              
            </tbody>
        </table>
    </div>
        
  </body>
</html>