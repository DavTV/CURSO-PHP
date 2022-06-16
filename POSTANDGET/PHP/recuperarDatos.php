<?php
$ArrayEmail=["juan@juan","pedro@pedro","paola@paola"];
$aux = true;
// echo "Esta es una frase con PHP";
if(isset($_POST["enviar"])){

    if(empty($_POST["email"]) < 1  && empty($_POST["password"])< 1){

        $email =  $_POST["email"];
        $password = $_POST["password"];
        // echo "email:".$email." y este el password: ".$password;

for ($i=0; $i <sizeof($ArrayEmail) ; $i++) { 
    $value = $ArrayEmail[$i];
    if(strcmp($email,$value) == 0){
        

        header("Location: panel.php");
    }else{
        $aux = false;
    }
}
        if($aux == false){
            echo "Usuario nore gistrado";
        }

    }else{
        echo "Ingrese datos completos";
    }
   
}else{
    echo "Aún no hay datos";
}

?>