<!doctype html>
<html lang="en">
  <head>
    <title>INTRODUCCIÓN A PHP</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>
    <div class="container w-50 mx-auto">
        <form class="" method="POST" >
        <h1 class="py-2">GET Y POST PHP</h1>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" r>
                <div  class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <button type="submit" class="btn btn-primary" name="enviar">Enviar</button>
        </form>
        <a href="PHP/eliminar.php?id=1" class="mt-5 btn btn-danger">Eliminar</a>

        <!-- Crear un enlace que redirija a una vista prueba donde imprima el nombre enviado concatenado con un hola -->

        <div class="alert alert-primary my-3" role="alert">
          <strong>
            <?php
              include("PHP/recuperarDatos.php");
            ?>
          </strong>

        </div>
        
    </div>  
  </body>
</html>