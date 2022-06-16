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
      <div class="container p-5">
        <h1>THIS IS THE HOME IN THE BODY</h1>

        <p class="py-3" ><a href="PHP/destruirSession.php">Log Out</a></p>

        <h2 class="h1">HELLO <?php echo $_SESSION["usuario"] ?></h2>

        <div class="alert alert-secondary alert-dismissible fade show" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        
            <strong>Holy guacamole!</strong> You should check in on some of those fields below.
        </div>
        
      </div>
  </body>
</html>