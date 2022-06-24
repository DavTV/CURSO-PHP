<?php
include("conexion.php");
            if(isset($_POST["buscar"])){
                if(empty($_POST["nombreBuscar"])){
                    echo "LLene el nombre primero";
                }else{
                    $nombre= $_POST["nombreBuscar"];
                    $consulta = "SELECT * FROM reparacion where propietario= '$nombre'";
                    $resultado = $conexion -> query($consulta);

                    
                    if(mysqli_num_rows($resultado)>0){
    
                        while($fila= $resultado->fetch_assoc()){
                           
                            ?>
        
        
                        <form class=" shadow p-3 my-4 rounded"  method="POST">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <input type="hidden" name="id" value="<?php echo $fila["id"]; ?>">
                                <div class="mb-3">
                                    <label class="form-label">Serial del equipo</label>
                                    <input type="text" class="form-control" name="serial" value="<?php echo $fila["serial"]; ?>">   
                                </div>
                                <div class="mb-3">
                                      <label for="" class="form-label">Tipo de equipo</label>
                                      <select class="form-select" name="tipo" >
                                        <option value ="<?php echo $fila["tipo"]; ?>"><?php echo $fila["tipo"]; ?></option>
                                        <option value="pc">PC</option>
                                        <option value="portatil">Portatil</option>
                                        <option value="todo en uno">Todo en uno</option>
                                      </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Marca</label>
                                    <input type="text" class="form-control" name="marca" value ="<?php echo $fila["marca"]; ?>">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Propietario</label>
                                    <input type="text" class="form-control" name="propietario" value ="<?php echo $fila["propietario"]; ?>">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Teléfono</label>
                                    <input type="number" class="form-control" name="telefono" value ="<?php echo $fila["telefono"]; ?>">
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Correo electrónico</label>
                                    <input type="email" class="form-control" name="correo" value ="<?php echo $fila["correo"]; ?>">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Fecha de ingreso</label>
                                    <input type="date" class="form-control" name="fecha" value ="<?php echo $fila["fechaRegistro"]; ?>">
                                </div>
                               <div class="mb-3">
                                      <label for="" class="form-label">Diagnostico</label>
                                      <textarea class="form-control" name="diagnostico" rows="3"><?php echo $fila["diagnostico"]; ?></textarea>
                                </div>
                               <div class="mb-3">
                               
                                   <button class="btn btn-primary w-100" name="actualizar" >Actualizar</button>
                               <div>
                                
                            </div>
                        </div>
                        
                        </form>
    
                            <?php
                        }
    
                    }else {
                        
                        echo "Usuario no encontrado";
                    }
                }}
                    ?>
        


