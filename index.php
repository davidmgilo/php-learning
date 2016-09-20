<?php

require 'functions.php';

class Task {

    public $description;

    public $completed;

    public function __construct($description,$completed)
    {
        $this->description = $description;
        $this->completed = $completed;
    }
}

//POJO
//POPO
// PLAIN OLD OBJECT
// CONTENEDOR / ESTRUCTURA DE DADES
$task = new Task("Aprendre PHP", false);
$task2 = new Task("Netejar habitació", true);
$task3 = new Task("Comprar pa", false);
$task1 = new Task("Sortir més");
//$task2 = new Task();
//$task3 = new Task();

var_dump($task);

require 'template.php';