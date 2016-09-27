<?php

//INSERTAR EL NOM A LA BASE DE DADES
$table='Persons';
$camp = 'FirstName';
$name = $_POST['name'];

$statement = $query->afegirSolCamp($table,$camp,$name);

echo "Hola " . $name ;
