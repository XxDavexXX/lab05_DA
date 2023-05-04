<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problema 3</title>
</head>
<body>
    <form action="problema3.php" method="post">
        <label for="tarifa">Ingresa tarifa del día:</label><br>
        <input type="number" id="tarifa" name="tarifa"><br><br>
        <label for="cantidad_dias"></label>Nª de días a alquilar:<br>
        <input type="number" id="cantidad_dias" name="cantidad_dias"><br><br>
        <input type="submit" value="Calcular"><br>
    </form>
</body>
</html>

<?php
    $tarifa = $_POST["tarifa"]; 
    $dias = $_POST["cantidad_dias"]; 

    $importeBruto = $tarifa * $dias; 
    $importeDescuento = $importeBruto * 0.15; 
    $importeNeto = $importeBruto - $importeDescuento; 
    $cantidadLapiceros = $dias * 3; 

    echo "- Importe bruto: S/ " .$importeBruto."<br>";
    echo "- Importe del descuento: S/ " .$importeDescuento."<br>";
    echo "- Importe neto a pagar: S/ " .$importeNeto."<br>";
    echo "- Cantidad de lapiceros de obsequio: " . $cantidadLapiceros;
?>