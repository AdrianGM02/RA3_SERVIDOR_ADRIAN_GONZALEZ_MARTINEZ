<?php

/**
 * author: Adrián González Martínez
 * Fecha: 27/09/2023
 * Sumar los tres primeros pares
 */


 

$sumPar = 0;
$cont = 0;
$par = 2;


while ($cont < 3) {
    if ($par % 2 == 0) {
        $sumPar += $par;
        $cont++;
        
    }

    $par++;
}

print("La suma es " . $sumPar)





?>