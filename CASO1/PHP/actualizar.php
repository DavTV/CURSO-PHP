<?php
    include("conexion.php");
    if(isset($_POST["actualizar"])){
        // echo "hola";
        $id = $_POST["id"];
        $serial = $_POST["serial"];
        $tipo = $_POST["tipo"];
        $marca = $_POST["marca"];
        $propietario= $_POST["propietario"];
        $telefono = $_POST["telefono"];
        $correo = $_POST["correo"];
        $diagnostico = $_POST["diagnostico"];
        $fechaRegistro = $_POST["fecha"];
        if(empty($serial) || empty($tipo) || empty($marca) || empty($propietario) || empty($telefono) || empty($correo) || empty($diagnostico)||empty($fechaRegistro))
        {
            echo "LLena todos los campos primero.";
        }else
            $consulta = "UPDATE `reparacion` SET `serial`='$serial',`tipo`='$tipo',`marca`='$marca',`propietario`='$propietario',`telefono`='$telefono',`correo`='$correo',`diagnostico`='$diagnostico',`fechaRegistro`='$fechaRegistro' WHERE `id` = '$id'";
            // echo $consulta;
            $resultado = $conexion -> query($consulta);
            if($resultado){

                echo "Actualización Exitoso de usuario." .$propietario;
            }else{
                echo  "Error en la actualización.";
                // $resultado->error_reporting();
            }
        }
    
?>