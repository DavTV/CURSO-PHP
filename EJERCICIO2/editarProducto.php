<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>
  <div class="container w-50 mx-auto py-3">
  <?php
       
       include("PHP/mostrarEditarProducto.php");
        while ($fila = $resultado->fetch_assoc()) {
            
        
  ?>
        <form class="" method="GET" >
                <h1 class="py-5 text-center ">ACTUALIZAR PRODUCTO</h1>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nombre</label>
                        <input type="number" class="form-control" id="id" aria-describedby="emailHelp" name="id_producto" value="<?php echo $fila['id_producto'] ?>" >
                        
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre" aria-describedby="emailHelp" name="nombre" value="<?php echo $fila['producto'] ?>">
                        
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Precio</label>
                        <input type="number" class="form-control" id="precio" aria-describedby="emailHelp" name="precio" value="<?php echo $fila['precio'] ?>">
                        
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Categoría</label>
                        <input type="text" class="form-control" id="categoria" aria-describedby="emailHelp" name="categoria" value="<?php echo $fila['categoria'] ?>">
                        
                    </div>
                    <button type="submit" class="btn btn-primary" name="enviar">Actualizar</button>
                </form>
            <?php
                include("PHP/actualizarProducto.php");
            ?>

 <?php
    }
 ?>
  
       
       
  </div>
  </body>
</html>