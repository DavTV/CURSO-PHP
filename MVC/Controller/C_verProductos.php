<?php
    require('Model/Conexion.php');
    $con = new Conexion();

    $productos = $con->getProductos();

    require('View/V_verProductos.php')

?>