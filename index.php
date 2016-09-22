<?php

require "core/bootstrap.php";


$routes = [
    '' => 'controllers/tasks.php',
    'persons' => 'controllers/persons.php',
    'about' => 'controllers/about.php',
    'contact' => 'controllers/contact.php',
];

$uri = trim($_SERVER['REQUEST_URI'],'/');

if(array_key_exists($uri,$routes)){
    require $routes[$uri];
} else{
    throw new Exception("No s'ha trobat la ruta");
}


//DRY: Don't repeat yourself -- El que s'ha de fer
//WET: WRITE EVERYTHING TWICE -- El que no s'ha de fer