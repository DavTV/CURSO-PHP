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
  <body class=""> 
    <div class="container">
        <h1 class="text-center border-bottom border-2 py-2 my-3">SUBIR IMAGEN</h1>
        <form action="" class="w-75 shadow rounded mt-5 p-3 mx-auto " method="POST"
        enctype="multipart/form-data">
            <div class="mb-3">
                <label for="" class="label-control  mb-2">Nombre</label>
                <input type="text" class="form-control" name="nombre">
            </div>
            <div class="mb-3">
                <label for="" class="label-control mb-2">Descripción</label>
                <textarea  class="form-control " name="descripcion"></textarea>
            </div>
            <div class="mb-3">
                <label for="" class="label-control  mb-2">Imagen</label>
                <input type="file" class="form-control" name="image">
            </div>
            <div class="mb-3">
                <input type="submit"  name="send" value="Publicar" class="btn btn-secondary w-100 text-white">
            </div>
        </form>
        <a href="galeria.php" class="nav-link  text-center my-3">Ver Galería</a>

    </div>
  </body>
</html>