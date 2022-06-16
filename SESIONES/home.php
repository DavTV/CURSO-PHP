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
      <?php
        session_start();
        if(empty($_SESSION["usuario"])){
            header("Location: index.php");
        }
      ?>
    <header class="position-sticky top-0 bg-white shadow p-3 text-end">
        <p class="d-inline">Welcome <strong><?php echo $_SESSION["usuario"] ?> </strong></p>
        <a href="PHP/destruirSesion.php" class="d-inline mx-2">Log Out</a>

    </header> 
    <div class="container">
    <!-- <a href="index.php" class="nav-link text-center my-3">Atrás</a> -->
    <h1 class="text-center py-3">Galería Exclusiva</h1>

        <div class="row shadow pb-3 mb-4 pt-4 px-3">
            <div class="col-6 col-md-4">
                <figure>
                    <img class="w-100 h-100" src="https://cdn.pixabay.com/photo/2021/08/25/20/42/field-6574455__480.jpg" alt="">
                    <small class="fw-bold text-secondary">Título</small>
                </figure>
            </div>
            <div class="col-6 col-md-4">
                <figure>
                    <img class="w-100" src="https://www.sabatebarcelona.com/wp-content/uploads/2016/02/fotografia-reproducciones-fotograficas.jpg" alt="">
                    <small class="fw-bold text-secondary">Título</small>
                </figure>
            </div>
            <div class="col-6 col-md-4">
                <figure>
                    <img class="w-100 h-100" src="https://miracomosehace.com/wp-content/uploads/2020/03/fotografia-naturaleza-HD.jpg" alt="">
                    <small class="fw-bold text-secondary">Título</small>
                </figure>
            </div>
            <div class="col-6 col-md-4">
                <figure>
                    <img class="w-100 h-100" src="https://www.nosotros-los-diseñadores.com/wp-content/uploads/2020/05/8-sitios-para-descagar-fotos-gratis.jpg" alt="">
                    <small class="fw-bold text-secondary">Título</small>
                </figure>
            </div>
            <div class="col-6 col-md-4">
                <figure>
                    <img class="w-100 h-100" src="https://www.wallpapertip.com/wmimgs/8-88027_1080p-download-tree-background-images-hd.jpg" alt="">
                    <small class="fw-bold text-secondary">Título</small>
                </figure>
            </div>
            <div class="col-6 col-md-4">
                <figure>
                    <img class="w-100 h-100" src="https://i.pinimg.com/originals/f3/f6/59/f3f659cd9c5ae78acf76ffebdee808b1.jpg" alt="">
                    <small class="fw-bold text-secondary">Título</small>
                </figure>
            </div>
        </div>
    </div>
  </body>
</html>