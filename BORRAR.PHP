<?php

$num = 1;

$dia = match($num) {
    1 => 'Lunes',
    2 => 'Martes',
    3 => 'Miércoles',
    4 => 'Jueves',
    5 => 'Viernes',
    6 => 'Sábado',
    7 => 'Domingo',
    default => 'El dia es inválido',
}

echo "El día de la semana es: $dia";
?>