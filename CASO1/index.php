<!doctype html>
<html lang="en">
  <head>
    <title>Caso 1</title>
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
          <h1 class="text-center text-primary fw-bold my-4" >Reparación de Computadoras</h1>
            <form class=" shadow p-3 my-4 rounded"  method="POST">
                <div class="row">
                    <div class="col-12 col-md-6">

                        <div class="mb-3">
                            <label class="form-label">Serial del equipo</label>
                            <input type="text" class="form-control" name="serial">
                        </div>
                        <div class="mb-3">
                              <label for="" class="form-label">Tipo de equipo</label>
                              <select class="form-select" name="tipo">
                                <option value="">-------</option>
                                <option value="pc">PC</option>
                                <option value="portatil">Portatil</option>
                                <option value="todo en uno">Todo en uno</option>
                              </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Marca</label>
                            <input type="text" class="form-control" name="marca">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Propietario</label>
                            <input type="text" class="form-control" name="propietario">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Teléfono</label>
                            <input type="number" class="form-control" name="telefono">
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Correo electrónico</label>
                            <input type="email" class="form-control" name="correo">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Fecha de ingreso</label>
                            <input type="date" class="form-control" name="fecha">
                        </div>
                       <div class="mb-3">
                              <label for="" class="form-label">Diagnostico</label>
                              <textarea class="form-control" name="diagnostico" rows="3"></textarea>
                        </div>
                       <div class="mb-3">
                       
                           <button class="btn btn-primary w-100" name="registrar" >Registrar</button>
                       <div>
                        
                    </div>
                </div>
                <?php  include("PHP/registrar.php") ?>
            </form>
      </div>
  </body>
</html>