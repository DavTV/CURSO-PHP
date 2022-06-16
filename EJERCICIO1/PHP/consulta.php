<?php
include("conexion.php");
// El error era porque la variable no estaba inicializada, al ponerle flase por defecto hace que eñ if en index sea saltado ya que if($resultado es true).
$resultado=false;
       if(!empty($_GET["dni"])){
            $dni = $_GET["dni"];
            $consulta = "SELECT * FROM persona WHERE  dni= $dni";
            $resultado = $conexion -> query($consulta);

       }



?>