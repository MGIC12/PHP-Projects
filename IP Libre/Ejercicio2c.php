<?php

/**
 * Se obtiene un arreglo multidimensional y muestra en pantalla todas las mascotas (nombre, edad, tipo)
 * @param array $multidMascotas
 * @return string
 */
function arrayMultiMascotas($multidMascotas){
    /*string $retornoArray*/
    foreach($multidMascotas as $indice => $dato){

        echo $indice.": ".$dato. "\n";
    }
}