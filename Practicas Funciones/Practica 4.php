<?php

function filtrarMenoresQue($array, $limite) {
    return array_filter($array, function($numero) use ($limite) {
        return $numero < $limite;
    });
}

// Ejemplo de uso:
$numeros = [10, 5, 20, 3, 15, 8, 1];
$limite = 10;

$resultado = filtrarMenoresQue($numeros, $limite);

// Mostramos el resultado
print_r($resultado);

?>