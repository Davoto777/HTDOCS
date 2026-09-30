<?php
require 'matematicas.php';

$notas = [5.0, 7.0, 9.0];
echo calcularPromedio($notas) . "<br>";
modificarNotas($notas, 1.0);
print_r($notas);

calcularPromedio(["hola"]); 