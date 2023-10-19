
<?php

/**
 * author: Adrián González Martínez
 * Fecha: 27/09/2023
 * Número de días de un mes
 */

$year = 1980;
$month = 3;


$month = '2';
$year = '2024';
$dias = 31;

  switch ($month) {
    case 4:
    case 6:
    case 9:
    case 11:
        echo "30 días.";
        break;
    case 2:
        if ((($year % 4 == 0) and ($year % 100 != 0)) || ($year % 400 == 0)) {
                echo "29 días.";
                break;
            }
            echo "28 días.";
            break;                
        }
?>