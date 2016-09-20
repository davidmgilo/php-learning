<?php

require 'functions.php';

require 'Task.php';


//POJO
//POPO
// PLAIN OLD OBJECT
// CONTENEDOR / ESTRUCTURA DE DADES
$task = new Task("Aprendre PHP", false);
var_dump($task);
$task->complete();
var_dump($task);

//$task2 = new Task("Netejar habitació", true);
//$task3 = new Task("Comprar pa", false);
//$task1 = new Task("Sortir més");
//$task2 = new Task();
//$task3 = new Task();

//var_dump($task);

require 'template.php';