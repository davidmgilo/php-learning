<?php
/**
 * Created by PhpStorm.
 * User: alumne
 * Date: 16/09/16
 * Time: 17:14
 */

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