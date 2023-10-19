<?php
/**
 * Author: Adrián González
 * Fecha: 03/10/2023
 * Enunciado: Crear un array con los alumnos de clase y permitir la selección aleatoria de uno de 
 * ellos. El resultado debe mostrar nombre y fotografía.
 */


$alumnos = array(
    "Victor Fernandez",
    "Adrián González",
    "Javier Postigo",
    "Adrián Galisteo",
    "Adrián Cordovero",
    "Alejandro Priego",
    "Antonio Carmona",
    "Hector",
    "Laura",
    "Jesus Fría",
    "Pablo Mérida",
    "Andres",
    "Ángel Cubero"
);

echo "El nombre es ". $alumnos[rand(0, count($alumnos)-1)];