<?php session_start();
include("conexion.php");
if(isset($_POST['enviar'])){
    if(!empty($_POST['email'])  && !empty($_POST['password'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $consulta = "SELECT * FROM usuario WHERE `email` = '$email' AND `password` = '$password'";
        $resultado = $conex->query($consulta);
        // echo $consulta;
        // echo mysqli_num_rows($resultado);

        if(mysqli_num_rows($resultado)>=1){
            $_SESSION["usuario"]=$email;
            header("Location: home.php");
            // echo "exito";   
            
            
        }else{
            echo "<div class='py-3'><center>Datos incorrectos </center></div>";
        }
    }else{
        
        // echo '<script language="javascript">alert("El Usuario/Contraseña no es correcto,intente de nuevo");</script>';
       echo "<div class='py-3'><center>Ingrese datos primero</center></div>";
    
    } 
}

?>