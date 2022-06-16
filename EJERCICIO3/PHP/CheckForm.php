<?php

    include("conex.php");
    if(isset($_POST["send"])){
        if(!empty($_POST["name"]) && !empty($_POST["price"]) && !empty($_POST["category"]) && !empty($_FILES["image"]["name"])){
            $nameProduct = $_POST["name"];
            $priceProduct = $_POST["price"];
            $categoryProduct = $_POST["category"];

            //Get value of image

            $imageNameProduct = $_FILES["image"]["name"];
            $imageTypeProduct = $_FILES["image"]["type"];
            $imageSizeProduct = $_FILES["image"]["size"];

            // check if file is a image
            if($imageTypeProduct == "image/jpeg" || $imageTypeProduct == "image/jpg" || $imageTypeProduct == "image/png" ){

                // Get Paths
                $destinationPath = $_SERVER["DOCUMENT_ROOT"] ."/CURSOPHP/IMAGEUP/IMG_PRODUCT/".$imageNameProduct;
                move_uploaded_file($_FILES["image"]["tmp_name"], $destinationPath);
                $DbPath = "IMG_PRODUCT/".$imageNameProduct;
                // echo $DbPath;
                
                //Send DataBase
                $query = "INSERT INTO productos(`producto`, `precio`, `categoria`, `imagen`) VALUES ('$nameProduct','$priceProduct','$categoryProduct','$DbPath')";

                $result = $conex->query($query);
                if($result){
                   
                    echo "<center class='m-3'>Successfull Shipping</center>";
                }else{
                    echo "<center class='m-3'>Error Shipping</center>";
                    echo mysqli_error($conex);
                }


            }else{
                echo "<center class='m-3'>This file is not allowed</center>";
            }
            
        }else{
            echo "<center class='m-3'>Please enter all data first</center>";
        }
    }


?>