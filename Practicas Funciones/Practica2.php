<?php
//Almacena la función anterior en el fichero matemáticas.php. Crea un fichero que
//la incluya y la utilice.

require_once 'matematicas.php';

$a = 1;
$b = -3;
$c = 2;

$resultado = resolverEcuacionSegundoGrado($a, $b, $c);

//mostramos el resultado
if ($resultado === false) {
    echo "La ecuación no tiene soluciones reales.";
} elseif (count($resultado) == 1) {
    echo "La ecuación tiene una solución: x = " . $resultado[0];
} else {
    echo "La ecuación tiene dos soluciones: x1 = " . $resultado[0] . ", x2 = " . $resultado[1];
}

