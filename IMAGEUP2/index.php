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
  <body class="bg-success text-white">
      
    <div class="container">
        <h1 class="text-center border-bottom border-2 py-2 my-3">Publish Products</h1>
        <form action="" class="w-75 shadow rounded mt-5 p-3 mx-auto " method="POST"
        enctype="multipart/form-data">
            <div class="mb-3">
                <label for="" class="label-control mb-2">Name of product</label>
                <input type="text" class="form-control " name="name">
            </div>
            <div class="mb-3">
                <label for="" class="label-control mb-2">Price of product</label>
                <input type="number" class="form-control mb-2 " name="price">
            </div>
            <div class="mb-3">
                <label for="" class="label-control mb-2" >Category of product</label>
                <select name="category" id="" class="form-select">
                    <option value="">Choose a category</option>
                    <option value="meat">Meat</option>
                    <option value="vegetable">Vegetable</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="" class="label-control  mb-2">Image of product</label>
                <input type="file" class="form-control" name="image">
            </div>
            <div class="mb-3">
                <input type="submit"  name="send" value="Send Product" class="btn btn-warning text-white">
            </div>
        </form>
    </div>
    <div class="row container mx-auto my-3">
    <?php
        include("PHP/checkForm.php");
        include("PHP/showData.php");
        while($fila = $resultado->fetch_assoc()){
            ?>
                        <div class="col-6 col-md-4 my-3">
                        <div class="card text-dark">
                            <img class="card-img-top" src="<?php echo $fila["imagen"] ?>" alt="<?php echo $fila["nombre"] ?>">
                            <div class="card-body">
                                <h4 class="card-title"><?php echo $fila["producto"] ?></h4>
                                <p class="card-text"><?php echo $fila["categoria"] ?></p>
                                <p class="card-text">S/ <?php echo $fila["precio"] ?></p>
                                <button class="btn btn-warning">Buy Product</button>
                            </div>
                        </div>
                        </div>
                   
                <?php
        }
    ?>

</div>

  </body>
</html>