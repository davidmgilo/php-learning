<?php

require "src/core/bootstrap.php";

require "src/core/Request.php";

require "src/core/Router.php";

require Router::load('routes.php')->direct(Request::uri());
