<?php

require __DIR__."/../src/core/bootstrap.php";

use Davidmgilo\Myframework\core\Request;

use Davidmgilo\Myframework\core\Router;

require Router::load('routes.php')->direct(Request::uri());
