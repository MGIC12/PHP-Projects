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