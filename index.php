<?php

require "core/bootstrap.php";

require "core/Request.php";

require "core/Router.php";

//Programació orientada a objectes - evitar funció, millor mètodes

//HTTP -> Requests -> Response
//
//$request = new Request();
//$uri = $request->uri();

$routes = require "routes.php";

$uri = Request::uri();

$router = new Router;
$router->define($routes);
require $router->direct($uri);

//EXPRESSIVITAT

