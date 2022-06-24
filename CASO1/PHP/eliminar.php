<?php
include("conexion.php");
            $id=$_GET["id"];
            $consulta = "DELETE FROM  `reparacion` WHERE `id` = '$id'";
            $resultado = $conexion -> query($consulta);
            if($resultado){
                header("Location: ../mostrar.php");
            }

?>