<?php

namespace Davidmgilo\Myframework\core;

use PDO, PDOException;

function hello($name){
    echo "Hola ". $name."!";
}

function hellovtortosina($name, $surname = "Curto"){
    echo "Hola ". $name. " ". $surname ."!";
}

function printArgs($args){
    foreach ($args as $arg) {
        echo $arg . ',';
    }
}

function sum(){
    $numbers = func_get_args();

    return array_sum($numbers);
}


function connectDb()
{
    try {
        $pdo = new PDO('mysql:host=127.0.0.1;dbname=prova', 'root', '');
        return $pdo;
    } catch (PDOException $e) {
        die("Ha hagut un error durant la connexió. Missatge: " . $e->getMessage());
    }
}

/**
 * @param $pdo
 */
function allTasks(PDO $pdo)
{
    $query = $pdo->prepare('SELECT * FROM todos');

    $query->execute();

    return $query->fetchAll(
        PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE,
        Task::class);
}
