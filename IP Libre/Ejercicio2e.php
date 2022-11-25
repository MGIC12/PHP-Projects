<?php

/**
 * Inicializa el arreglo y retorna el resultado del mismo
 * @return array
 */
function cargarMascotas(){
    $misMascotas = [];

    $misMascotas[0] = ["nombre" => "Gonzo", "edad" => 9, "tipo" => "perro"];
    $misMascotas[1] = ["nombre" => "Peggy", "edad" => 8, "tipo" => "puerco"];
    $misMascotas[2] = ["nombre" => "Harry", "edad" => 4, "tipo" => "hamster"];

return $misMascotas;
}

/**
 * Obtiene un arreglo asociativo y devuelve un string indicando los datos de la mascota
 * @param array $arreglo
 * @return string
 */
function arrayAsociaString($arreglo){
    /*string $arregloString*/
$arregloString = "";
$arregloString =  $arreglo["nombre"]." es ".$arreglo["tipo"]." de ".$arreglo["edad"]." años.";
return $arregloString;
}
