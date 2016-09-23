<?php

require "core/bootstrap.php";


require "routes.php";

//Programació orientada a objectes - evitar funció, millor mètodes

//HTTP -> Requests -> Responseç
//
//$request = new Request();
//$uri = $request->uri();

$uri = Request::uri();


if(array_key_exists($uri,$routes)){
    require $routes[$uri];
} else{
    throw new Exception("No s'ha trobat la ruta");
}
