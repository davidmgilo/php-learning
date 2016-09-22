<?php

require "core/bootstrap.php";


require "routes.php";

$uri = trim($_SERVER['REQUEST_URI'],'/');

if(array_key_exists($uri,$routes)){
    require $routes[$uri];
} else{
    throw new Exception("No s'ha trobat la ruta");
}


//DRY: Don't repeat yourself -- El que s'ha de fer
//WET: WRITE EVERYTHING TWICE -- El que no s'ha de fer