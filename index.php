<?php

//$greeting = "Hola " . $_GET['name'] ."!";

//ARRAYS o vectors
// ESTRUCTURA DE DADES;
// Arrays PHP totes les estructures: Maps, Piles, Vectors, Llistes, etc.

//$names = array();

$names = [
    'Sergi',
    'Xavi',
    'Romeu'
];

foreach ($names as $name) {
    echo "$name</br>"; // >br perqué és html!!
}

//require 'template.php';