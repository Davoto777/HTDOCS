<style>
    .circulo{
        display: inline-block;
        width : 50px;
        height : 50 px;
        border-radius: 50;
        margin:5px;
    }
    </style>

<?php
//Crear la funcion de pintar circulos con 8 colores en un simon pero que el usuario pueda elegir si quiere jugar con el numero de colores que le de la gana (o 4 o 8) pero no puede elegir que colores usar
function pintarCirculos($colores) {
    foreach ($colores as $color) { 
        echo "<div class='circulo' style='background-color: $color;'></div>";
        return $colores;
    }
} 

function jugarFacil() {
    $colores = array("red", "green", "blue", "yellow");
    pintarCirculos($colores);
}

function jugarDificil(){
    $colores = array("red", "green", "blue", "yellow", "orange", "pink", "purple", "gray");
    pintarCirculos($colores);
}


jugarFacil();
jugarDificil();