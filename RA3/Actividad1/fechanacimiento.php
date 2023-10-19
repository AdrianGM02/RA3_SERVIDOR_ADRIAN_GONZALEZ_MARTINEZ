<?php

/**
 * author: Adrián González Martínez
 * Fecha: 27/09/2023
 * Edad de la persona
 */

$ano = 2000;
$mes = 10;
$dia = 26;

$anoAct = (int)date("Y");
$mesAct = (int)date("m");
$diasAct = (int)date("d");

$anoEst = $anoAct - $ano;


if ($mes > $mesAct) {
    $anoEst--;
    
} else {
    if ($mesAct == $mes and $diasAct < $dia){
        $anoEst--;



    }
}


echo "Tiene " . $anoEst . " años";





?>