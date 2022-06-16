<?php
    include("conexion.php");
    if(isset($_GET["enviar"])){
        if(empty($_GET["name"]) || empty($_GET["email"]) || empty($_GET["password"])){

            echo "Ingrese todos los datos primero!";

        }else{
            
            $name=$_GET["name"]; 
            $email=$_GET["email"]; 
            $password=$_GET["password"];  
            $consulta = "INSERT INTO `usuario`( `name`, `email`, `password`) VALUES ('$name','$email','$password')";
            $resultado = $conex -> query($consulta);
            header("Location: index.php");

        }
 
    }

?>