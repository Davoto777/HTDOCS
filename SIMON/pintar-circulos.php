<?php
//Crear la funcion de pintar circulos con 8 colores en un simon pero que el usuario pueda elegir si quiere jugar con el numero de colores que le de la gana (o 4 o 8) pero no puede elegir que colores usar
function pintarCirculos($colores) {
    foreach ($colores as $color) {  
        return $colores;
    }
} 

function jugarFacil() {
    $colores = array("rojo", "verde", "azul", "amarillo");
    pintarCirculos($colores);
}

function jugarDificil(){
    $colores = array("Rojo", "Verde", "azul", "amarillo", "naranja", "rosa", "morado", "gris");
    pintarCirculos($colores);
}


jugarFacil();
jugarDificil();