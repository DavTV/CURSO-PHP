<?php
    include("conexion.php");
    if(isset($_POST["registrar"])){
        // echo "hola";
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
        }else{
            $consulta = "INSERT INTO `reparacion`( `serial`, `tipo`, `marca`,`propietario`,`telefono`,`correo`,`diagnostico`,`fechaRegistro`) VALUES ('$serial','$tipo','$marca','$propietario','$telefono','$correo','$diagnostico','$fechaRegistro')";
            $resultado = $conexion -> query($consulta);
            echo "Registro Exitoso.";
        }
    }
?>