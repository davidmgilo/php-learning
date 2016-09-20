<?php

require 'functions.php';

class Task {
    public function __construct()
    {
        echo "nova tasca construida";
    }
}

$task = new Task();
$task2 = new Task();
$task3 = new Task();

//var_dump($task)

require 'template.php';