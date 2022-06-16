<?php
    include("conexion.php");
    if(isset($_GET["enviar"])){
        if(empty($_GET["nombre"]) || empty($_GET["precio"]) || empty($_GET["nombre"])){

            echo "Ingrese todos los datos primero!";

        }else{
            
            $producto=$_GET["nombre"]; 
            $precio=$_GET["precio"]; 
            $categoria=$_GET["categoria"];  
            $consulta = "INSERT INTO `productos`( `producto`, `precio`, `categoria`) VALUES ('$producto','$precio','$categoria')";
            $resultado = $conex -> query($consulta);

        }
 
    }

?>