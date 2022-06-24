<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Productos</title>
</head>
<body>
    <table>
        <thead>
            <td>Nombre</td>
            <td>Precio</td>
        </thead>
    </table>
    <tbody>
        <?php
            foreach ($productos as $producto){
                echo "<tr>";
                echo "<td>".$producto["nombre"]."</td>";
                echo "<td>".$producto["precio"]."</td>";
                echo "</tr>";
            }
        ?>
    </tbody>
</body>
</html>