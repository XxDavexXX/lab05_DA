<?php 
if (isset($_POST["valor1"])) {
    $numero1 = $_POST["valor1"];
}
if (isset($_POST["valor2"])) {
    $numero2 = $_POST["valor2"];
}
    $producto=$numero1*$numero2;
    echo "El producto de la operación es : ".$producto;
?>