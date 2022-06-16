<?php
    include("conexion.php");
    if(isset($_GET["enviar"])){
        if(empty($_GET["nombre"]) ||empty($_GET["id_producto"]) || empty($_GET["precio"]) || empty($_GET["nombre"])){

            echo "Ingrese todos los datos primero!";

        }else{

            $id_producto=$_GET["id_producto"];           
            $producto=$_GET["nombre"]; 
            $precio=$_GET["precio"]; 
            $categoria=$_GET["categoria"];  

            $consulta = "UPDATE `productos` SET `producto`='$producto',`precio`='$precio',`categoria`='$categoria' WHERE id_producto = $id_producto";

            $resultado = $conex -> query($consulta);

            if ($resultado) {
                header("Location: index.php");
            }
        }
 
    }

?>