<?php

require "src/core/bootstrap.php";

use Davidmgilo\Myframework\core\Request;

use Davidmgilo\Myframework\core\Router;

//require "src/core/Request.php";

//require "src/core/Router.php";

require Router::load('routes.php')->direct(Request::uri());
