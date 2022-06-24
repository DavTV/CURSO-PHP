<!doctype html>
<html lang="en">
  <head>
    <title>Caso1 Buscar </title>
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
        <form action="" class="my-3 mx-auto" method="POST">
            <div class=" btn-group ">
                <input type="text" class="form-control " name="nombreBuscar">
                <button class="btn btn-primary" name="buscar">Buscar</button>
            </div>
</form>
            <br>
            <?php include("PHP/buscar.php"); ?>
            <?php  include("PHP/actualizar.php") ?>
                    
            
    </div>
    
  </body>
</html>