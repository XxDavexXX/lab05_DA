<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 01 -Operaciones con PhP</title>
</head>
<body>
    <form method="post" action="actividad1.php">
        Ingresar Valor 1: <br><input type="text" name="valorl"><br>
        Ingresar Valor 2: <br><input type="text" name="valor2"><br>
        Resultado :<br>
        <input type="submit" name="Suma" value="Suma">
    </form>
<?php 
    if (isset($_POST["valorl"])) {
        $numero1 = $_POST["valorl"];
    }
    if (isset($_POST["valor2"])) {
        $numero2 = $_POST["valor2"];
    }
    
    $suma = $numero1 + $numero2;
    echo "El resultado de la Suma es: ".$suma;
?>
</body>
</html>