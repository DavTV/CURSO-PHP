<!doctype html>
<html lang="en">
  <head>
    <title>Generar Carnet Covid</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="icon" href="https://th.bing.com/th/id/R.307780f0f8baa69129f7e660705ff536?rik=7%2fIJGLPMRLN06w&riu=http%3a%2f%2fwww.regionjunin.gob.pe%2fdata%2fmultimedia%2f1440783852_escudo_peruano.png&ehk=MbKBQNqBnDdwRD7hGOzkczDP150b7IWKGbZ0pcFq3zg%3d&risl=&pid=ImgRaw&r=0">
  </head>
  <body class="bg-danger">
      <div class="container p-5">
          <h1 class="py-2 text-white">FICHA COVID 2022</h1>
          <p class="fst-italic text-white">Compruebe y obtenga su carnet de vacunación</p>
          <div class="formulario border pb-3 px-3 rounded bg-white">
              <figure>
                  <img class ="d-block mx-auto " src="https://sni.org.pe/wp-content/uploads/2020/03/cliente-gobierno-del-peru.png" alt=""  >
              </figure>
              <form action="" method="GET">

                <div class="mb-3 w-75 mx-auto">
                    <label for="exampleInputEmail1" class="form-label">Ingrese su DNI</label>
                    <div class="input-group input-group-sm mb-3">
                        <input type="number" class="form-control py-2" id="" aria-describedby="emailHelp" name="dni">
                        <button class="btn btn-danger" type="submit" name="enviar">Consultar</button>
                    </div>
                </div>

              </form>

          </div>
      </div>
        <div class="container px-5 mb-5">
            <div class="ficha formulario border p-3 rounded bg-white " id="ficha">
                <div class="row d-flex align-items-center p-lg-5  mx-auto ">
                    <?php 
                    if (isset($_GET["enviar"])) {
                    include("PHP/consulta.php");
                    $count = 0;
                        if($resultado){ 
                            while ($fila = $resultado->fetch_assoc()) {  
                                $count++;
                            ?>
                                <div class="col-12 col-md-6 ">
                                    <figure>
                                        <img src="https://th.bing.com/th/id/R.baab394b13d90b82e910fe7daffe91d6?rik=j%2fgpEnKUbHUF4Q&riu=http%3a%2f%2fcdn.playbuzz.com%2fcdn%2f913253cd-5a02-4bf2-83e1-18ff2cc7340f%2fc56157d5-5d8e-4826-89f9-361412275c35.jpg&ehk=%2fLjgOG%2bOBkDVenK3gytA6rK4ZjpCTRXBnFQiOOjVHgc%3d&risl=&pid=ImgRaw&r=0" alt="" class="w-25">
                                    </figure>
                                    <p><strong>Nombre:</strong> <span><?php echo $fila["nombre"]?></span></p>
                                    <p><strong>Apellido:</strong> <span><?php echo $fila["apellido"]?></span></p>
                                    <p><strong>Edad:</strong> <span><?php echo $fila["edad"]?></span></p>
                                </div>
                                <div class="col-12 col-md-6">
                                    <p><strong>Nro dosis:</strong> <span><?php echo $fila["nrodosis"]?></span></p>
                                    <p><strong>Fecha primera dosis:</strong> <span><?php echo $fila["fechaprimeradosis"]?></span></p>
                                    <p><strong>Fecha segunda dosis:</strong> <span><?php echo $fila["fechasegundadosis"]?></span></p>
                                    <?php  
                                        if($fila["nrodosis"] == "1"){
                                            echo " <p class='fst-italic text-dark'>Usted no puede obtener el carnet de vacunación.</p>";
                                        }else{
                                    ?>
                                    <p class="fst-italic">Genere el carnet para finalizar el proceso</p>
                                    <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Generar Carnet</button>
                                    <?php } 
                                        
                                    ?>
                                </div>
                            
                            <?php   
                        }
                            if($count < 1){
                                echo "<div class='alert alert-danger ' role='alert'>
                                    <strong>Usuario no encontrado!</strong>
                                    </div>";
                            }
                        }else{
                            echo "<div class='alert alert-danger ' role='alert'>
                                <strong>Ingrese su DNI antes de continuar!</strong>
                                </div>";
                        }
                    
                    
                    }else{
                        echo "<strong class='fst-italic text-dark text-center'>Derrotar al covid depende de todos!</strong>";
                    }
                    ?>

                    
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header bg-danger text-white">
                <h5 class="modal-title" id="exampleModalLabel">Carnet de vacunación</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <figure>
                    <img src="https://www.hbanoticias.pe/wp-content/uploads/2021/11/000803618W.jpg" alt="" class="w-100">
                </figure>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Aceptar</button>
            </div>
            </div>
        </div>
        </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>