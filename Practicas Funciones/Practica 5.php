<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Prueba de Funciones PHP</title>
</head>
<body>

<?php

// 1. FUNCIONES DE VARIABLES
$nombre = "David";

echo "<strong>isset:</strong> " . (isset($nombre) ? "Existe" : "No existe") . "<br>";
echo "<strong>empty:</strong> " . (empty($nombre) ? "Está vacía" : "Tiene valor") . "<br>";
echo "<strong>is_int:</strong> " . (is_int($nombre) ? "Es entero" : "No es entero") . "<br><br>";


// 2. FUNCIONES DE CADENAS
$texto = "hola mundo";

echo "<strong>strlen:</strong> " . strlen($texto) . "<br>";
echo "<strong>strtoupper:</strong> " . strtoupper($texto) . "<br>";
echo "<strong>explode:</strong> ";
print_r(explode(" ", $texto));
echo "<br><br>";


// 3. FUNCIONES DE ARRAY
$num = [3, 1, 2];

echo "<strong>count:</strong> " . count($num) . "<br>";

sort($num);
echo "<strong>sort:</strong> " . implode(", ", $num) . "<br>";

$persona = ["nombre" => "David", "edad" => 20];
echo "<strong>array_key_exists:</strong> " . (array_key_exists("nombre", $persona) ? "Existe la clave" : "No existe") . "<br>";

?>

</body>
</html>