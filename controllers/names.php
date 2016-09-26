<?php

//INSERTAR EL NOM A LA BASE DE DADES
$table='Persons';
$camp = 'FirstName';
$name = $_POST['name'];
//
//$query = $pdo->prepare("INSERT INTO {$table} ({$camp}) VALUES ('{$name}')");
//$query->execute();
//
//$query->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, Person::class);

$statement = $query->afegirSolCamp($table,$camp,$name);

echo "Hola " . $name ;

//Ha de quedar

//$tasks = $query->all("Persons"); però amb afegir a la base de dades