<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problema 1</title>
</head>
<body>
    <form action="problema2.php" method="post">
        <label for="precio_gaseosa">Ingresa precio de la gaseosa:</label><br>
        <input type="number" id="precio_gaseosa" name="precio_gaseosa"><br><br>
        <label for="cantidad"></label>Nª de unidades a llevar:<br>
        <input type="number" id="cantidad" name="cantidad"><br><br>
        <input type="submit" value="Calcular"><br>
    </form>
</body>
</html>
<?php
$precioActual = $_POST["precio_gaseosa"];
$cantidad = $_POST["cantidad"]; 
$descuentoEspecial = 0.07; 

$nuevoPrecio = $precioActual * 0.95; 
$importeCompra = $nuevoPrecio * $cantidad;
$importeDescuento = $importeCompra * $descuentoEspecial; 
$importePagar = $importeCompra - $importeDescuento; 
$obsequio = $cantidad * 2; 

echo "- Nuevo precio de la gaseosa: S/ " .$nuevoPrecio."<br>";
echo "- Importe de la compra: S/ " . $importeCompra."<br>";
echo "- Importe del descuento: S/ " . $importeDescuento."<br>";
echo "- Importe a pagar: S/ " . $importePagar."<br>";
echo "- Obsequio: " . $obsequio . " caramelos";
?>