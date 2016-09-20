<?php

require 'functions.php';

require 'Task.php';

// PDO: PHP Data Objects library/biblioteca
// Permet agafar dades de la bbdd i mapejar-les.



try{
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=prova','root','');
}
catch (PDOException $e){
    die("Ha hagut un error durant la connexió. Missatge: " . $e->getMessage());
}

$query = $pdo->prepare('SELECT * FROM todos');

$query->execute();

var_dump($query->fetchAll());


//require 'template.php';