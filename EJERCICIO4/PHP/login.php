<?php session_start();
    include("conexion.php");
    if(isset($_POST["send"])){
        if(!empty($_POST["email"]) && !empty($_POST["password"])){
            $email = $_POST["email"];
            $password = $_POST["password"];
            $consulta = "SELECT * FROM `usuario` WHERE `email` = '$email' AND `password` = '$password'";
            $resultado = $conexion->query($consulta);

           if(mysqli_num_rows($resultado)>=1){
               $_SESSION["usuario"]=$email;
               header("Location: home.php");
                // echo " encontrado";
           }else{
               echo "No encontardo";
           }
        }else{
            echo "Ingrese datos";
        }
    }


?>