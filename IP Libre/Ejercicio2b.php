<?php

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

/* 
echo "Nombre: ";
$arregloIn["nombre"] = trim(fgets(STDIN));

echo "Edad: ";
$arregloIn["edad"] = trim(fgets(STDIN));

echo "Tipo: ";
$arregloIn["tipo"] = trim(fgets(STDIN));

$arregloStringFinal = arrayAsociaString($arregloIn);

echo $arregloStringFinal;
*/