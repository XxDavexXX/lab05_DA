<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problema 1</title>
</head>
<body>
    <form action="problema1.php" method="post">
        <label for="nombre_completo">Nombre Completo</label><br>
        <input type="text" id="nombre_completo" name="nombre_completo"><br><br>
        <label for="hijos"></label>Nª Hijos<br>
        <input type="number" id="hijos" name="hijos"><br><br>
        <label for="total_ventas"></label>Total de Ventas x mes<br>
        <input type="number" id="total_ventas" name="total_ventas"><br><br>
        <input type="submit" value="Calcular"><br>
    </form>
    <?php 
        $bono_hijos = $_POST["hijos"] * 50;
        $sueldo_basico = 600;
        $total_ventas = $_POST["total_ventas"] * 0.0075;
        $sueldo_bruto = $bono_hijos + $sueldo_basico + $total_ventas;
        $desc = $sueldo_bruto * 0.11;
        $neto = $sueldo_bruto - $desc;
        echo "<br>Hola ".$_POST["nombre_completo"]."<br>- La comision del importe total vendido es: ".$total_ventas."<br>"."- La Bonificación por hijos es: ".$bono_hijos."<br>"."- El sueldo Bruto es: ".$sueldo_bruto."<br>"."- El Descuento es: ".$desc."<br>"."- El sueldo neto del vendedor es: ".$neto;
    ?>
</body>
</html>