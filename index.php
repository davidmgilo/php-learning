<?php

require 'functions.php';

class Task {
    public function __construct($a,$b,$c)
    {
//        echo "nova tasca construida";
        echo $a;
        echo $b;
        echo $c;
    }
}

$task = new Task('patata','b','c');
//$task2 = new Task();
//$task3 = new Task();

//var_dump($task)

require 'template.php';