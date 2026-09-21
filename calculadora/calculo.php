<?php
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$opera = $_POST['opera'];

$resultado = match($opera) {
    '+' => $num1 + $num2,
    '-' => $num1 - $num2,
    '*' => $num1 * $num2,
    '/' => $num2 != 0 ? $num1 / $num2 : 'Error: No se puede dividir entre cero',
    default => 'Operación inválida',
};

echo "El resultado de la operación es: $resultado";
?>