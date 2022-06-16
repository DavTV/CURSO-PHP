<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body{
            background: linear-gradient(to left, blue, white);
        }
    </style>
  </head>
  <body>
      <div class="container p-5 w-50  text-white">
      <h1 class="text-center">Vender Producto</h1>
        <a href="reporte.php" class="mb-4">Reporte</a>
            <form class="">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Producto</label>
                    <input type="text" class="form-control">
                   
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Categoría</label>
                    <input type="text" class="form-control">
                   
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Precio</label>
                    <input type="number" class="form-control" step="any">
                   
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Cantidad</label>
                    <input type="number" class="form-control">
                   
                </div>

                
                <button type="submit" class="btn btn-success">Vender</button>
            </form>
      </div>
   
  </body>
</html>