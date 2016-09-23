<?php

//INSERTAR EL NOM A LA BASE DE DADES
$table='Persons';
$camp = 'FirstName';
$name = $_POST['name'];

$query = $pdo->prepare("INSERT INTO {$table} ({$camp}) VALUES ('{$name}')");
$query->execute();

$query->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, Task::class);

echo "Hola " . $name ;