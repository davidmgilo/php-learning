<?php

require 'functions.php';

class Task {
    public function __construct($description)
    {
        echo $description;
    }
}

$task = new Task("Aprendre PHP");
$task2 = new Task("Netejar habitació");
$task3 = new Task("Comprar pa");
$task4 = new Task("Sortir més");
//$task2 = new Task();
//$task3 = new Task();

//var_dump($task)

require 'template.php';