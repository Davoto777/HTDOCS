<?php

function resolverEcuacionSegundoGrado($a, $b, $c) {
    $discriminante = $b * $b - 4 * $a * $c;

    if ($discriminante < 0) {
        return false;
    } elseif ($discriminante == 0) {
        return [-$b / (2 * $a)];
    } else {
        $x1 = (-$b + sqrt($discriminante)) / (2 * $a);
        $x2 = (-$b - sqrt($discriminante)) / (2 * $a);
        return [$x1, $x2];
    }
}

?>