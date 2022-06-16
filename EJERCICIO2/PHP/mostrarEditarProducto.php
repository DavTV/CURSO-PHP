<?php
        include("conexion.php");
        $producto = $_GET["id_producto"];
        $consulta = "SELECT * FROM productos WHERE id_producto = $producto";
        $resultado = $conex -> query($consulta);
        
        
?>