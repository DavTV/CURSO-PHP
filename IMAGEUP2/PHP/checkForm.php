<?php
    include("conexion.php");
        if(isset($_POST["send"])){
            if(!empty($_POST["name"]) && !empty($_POST["price"]) && !empty($_POST["category"]) && !empty($_FILES["image"]["name"]) ){

                $nameProduct=$_POST["name"];
                $priceProduct=$_POST["price"];
                $categoryProduct=$_POST["category"];

                //Get Data Image
                $nameImage = $_FILES["image"]["name"];
                $typeImage = $_FILES["image"]["type"];
                $sizeImage = $_FILES["image"]["size"];

                if($typeImage == "image/jpeg" || $typeImage == "image/jpg" || $typeImage == "image/png"){
                    $destinationPath = $_SERVER["DOCUMENT_ROOT"]."/CURSOPHP/IMAGEUP2/IMG_PRODUCTS/".$nameImage;
                    
                    move_uploaded_file($_FILES["image"]["tmp_name"],$destinationPath);

                    // PATH UP DB
                    $pathDb = "IMG_PRODUCTS/".$nameImage;

                    // CREATE QUERY
                    $query = "INSERT INTO `productos`( `producto`, `precio`, `categoria`,`imagen`) VALUES ('$nameProduct','$priceProduct','$categoryProduct','$pathDb')";
                    $result = $conex -> query($query);
                    
                    if ($result) {
                        echo "<center class='my-3'>Successfull Insert into </center>";
                        
                    }

                    echo "<center class='my-3'>Image Up </center>";

                }else{
                echo "<center class='my-3'>This file is not allowed</center>";

                }



            }else{
                echo "<center class='my-3'>Please enter all data firts</center>";
            }
        }

?>