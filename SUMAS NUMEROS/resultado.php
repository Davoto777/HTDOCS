<!DOCTYPE html>
<?php
$numeros = $_POST['numeros'];
$resultado = array_sum($numeros);
echo $numeros ? "<p>El resultado es: $resultado</p>" : "<p>No se enviaron números.</p>";
?>
<a href="SUMA DE NUMEROS.html">Volver a empezar</a>