<?php
        include("conexion.php");
        $producto = $_GET["id_producto"];
        echo $producto;
        $consulta = "DELETE FROM `productos` WHERE id_producto = $producto";
        $resultado = $conex->query($consulta);
        if($resultado){
            header("Location: ../index.php");
        }

?>