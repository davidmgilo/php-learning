<?php


$table='Persons';
$camp = 'FirstName';
$name = $_POST['name'];

$statement = $query->afegirSolCamp($table,$camp,$name);

echo "Hola " . $name ;
