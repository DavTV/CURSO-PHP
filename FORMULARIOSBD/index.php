<!doctype html>
<html lang="en">
  <head>
    <title>FORMULARIO CON BD</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>
  <div class="container w-50 mx-auto py-3">
        <form class="" method="GET" >
        <h1 class="py-5 text-center ">REGISTRAR NUEVO PRODUCTO</h1>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" aria-describedby="emailHelp" name="nombre" r>
                
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Precio</label>
                <input type="number" class="form-control" id="precio" aria-describedby="emailHelp" name="precio" r>
                
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Categoría</label>
                <input type="text" class="form-control" id="categoria" aria-describedby="emailHelp" name="categoria" r>
                
            </div>
            <button type="submit" class="btn btn-primary" name="enviar">Enviar</button>
        </form>
       

        <!-- Crear un enlace que redirija a una vista prueba donde imprima el nombre enviado concatenado con un hola -->

        <div class="alert alert-primary my-3" role="alert">
          <strong>
            <?php
              include("PHP/agregarProducto.php");
            ?>
          </strong>

        </div>
        
        

 
        <table class="table text-center">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">PRODUCTO</th>
              <th scope="col">CATEGORIA</th>
              <th scope="col">PRECIO</th>
              <th scope="col">OPCIONES</th>
            </tr>
          </thead>
          <tbody>
            <?php include("PHP/mostrarProductos.php");
              while($fila = $resultado->fetch_assoc()){
            ?>
              <tr>
                <th scope="row"><?php echo $fila["id_producto"] ?></th>
                <td>  <?php echo $fila["producto"] ?></td>
                <td><?php echo $fila["categoria"] ?></td>
                <td><?php echo $fila["precio"] ?></td>
                <td>
                  <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                    <a  href="PHP/borrarProducto.php?id_producto=<?php echo $fila["id_producto"] ?>" class="btn btn-danger">Eliminar</a>
                    <a href="editarProducto.php?id_producto=<?php echo $fila["id_producto"] ?>"  class="btn btn-success">Editar</a>
                    
                  </div>
                </td>
              </tr>
              
            <?php
              } 
            ?>    

  </tbody>
</table>

        


    </div>  

  </body>
</html>