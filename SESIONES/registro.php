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
       <div class="row shadow p-3">
           <div class=" col-12 col-md-6">
           <form class="" method="GET" >
               <a href="index.php">Login</a>
                <h1 class="py-5 text-center ">REGISTRO USUARIO</h1>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Name</label>
                    <input type="text" class="form-control shadow" id="precio" aria-describedby="emailHelp" name="name"  required >
                    
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" class="form-control shadow" id="email" aria-describedby="emailHelp" name="email"  required >
                    
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Password</label>
                    <input type="number" class="form-control shadow" id="precio" aria-describedby="emailHelp" name="password"  required >
                    
                </div>
                <button type="submit" class="btn btn-primary w-100" name="enviar">Enviar</button>
            </form>
           </div>
           <div class="col-6 d-none d-md-block  ">
                <figure class="w-100 h-100 ">
                    <img src="https://static2.mujerhoy.com/www/multimedia/202001/21/media/cortadas/gym-mujeres-tips-k9yC-U901298003709QeC-624x468@MujerHoy.jpg" alt="" class="w-100 h-100 object-cover">
                </figure>
           </div>
       </div>
       

        <!-- Crear un enlace que redirija a una vista prueba donde imprima el nombre enviado concatenado con un hola -->
        <?php
            include("PHP/registro.php");
        ?>

        


    </div>  

  </body>
</html>