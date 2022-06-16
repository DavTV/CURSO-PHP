<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  </head>
  <body>
      <div class="container">
      <?php
            
        session_start();
        if(!empty($_SESSION["usuario"])){
            header("Location: home.php");
        }
        error_reporting(0);
      ?>
          <form method="POST" class="w-75 mx-auto p-5 shadow my-5">
              <p class="text-center p-1"><i class="fa-brands fa-suse fs-1"></i></p>
              <div class="mb-3">
                  <label for="" class="form-label"><i class="fa-solid fa-user px-1"></i> Email</label>
                  <input type="email" placeholder="Example@example.com" class="form-control" name="email">
              </div>
              <div class="mb-3">
                  <label for="" class="form-label"><i class="fa-solid fa-key ppx-1"></i> Password</label>
                  <input type="password" placeholder="********" class="form-control" name="password">
              </div>
              <div class="mb-3">
                  <button type="submit" class="btn btn-danger" name="send">Login</button>
              </div>
              
                <p class="text-danger text-center"><?php include("PHP/login.php");?></p>

          </form>
      </div>

  </body>
</html>