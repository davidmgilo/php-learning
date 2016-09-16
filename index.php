<?php

//$greeting = "Hola " . $_GET['name'] ."!";

//ARRAYS o vectors
// ESTRUCTURA DE DADES;
// Arrays PHP totes les estructures: Maps, Piles, Vectors, Llistes, etc.

//$names = array();

$names = [
    'Sergi',
    'Xavi',
    45,
    true
];

echo "<ul>";
foreach ($names as $name) {
    echo "<li>$name</li>"; // >br perqué és html!!
}
echo "</ul>";

//require 'template.php';