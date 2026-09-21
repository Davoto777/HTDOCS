<?php
echo"estamos comprovando nuestra primera validación";
$n = $_GET ['usuario'];
$p = $_GET ['password'];   
echo $n;
echo $p;
$USU='david';
$CONTRA='1234';
if ($n==$USU && $p==$CONTRA) {
    echo "Bienvenido";
} else {
    echo "Usuario o contraseña incorrectos";
}

?>