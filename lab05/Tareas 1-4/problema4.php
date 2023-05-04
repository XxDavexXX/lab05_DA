<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problema 3</title>
</head>
<body>
    <form action="problema4.php" method="post">
        <label for="precio_cono">Ingresa precio del cono:</label><br>
        <input type="number" id="precio_cono" name="precio_cono"><br><br>
        <label for="cantidad_conos"></label>Nª de conos:<br>
        <input type="number" id="cantidad_conos" name="cantidad_conos"><br><br>
        <input type="submit" value="Calcular"><br>
    </form>
</body>
</html>

<?php
    $precioCono = $_POST["precio_cono"]; 
    $cantidadConos = $_POST["cantidad_conos"];

    $importeCompra = $precioCono * $cantidadConos; 
    $importeDescuento1 = $importeCompra * 0.05;
    $importeCompraDesc1 = $importeCompra - $importeDescuento1;
    $importeDescuento2 = $importeCompraDesc1 * 0.05; 
    $importeTotalDescuento = $importeDescuento1 + $importeDescuento2; 
    $importeNeto = $importeCompra - $importeTotalDescuento; 

    echo "- Importe de la compra: S/ " . $importeCompra. "<br>";
    echo "- Importe del descuento total: S/ " . $importeTotalDescuento. "<br>";
    echo "- Importe a pagar: S/ " . $importeNeto. "<br>";
?>