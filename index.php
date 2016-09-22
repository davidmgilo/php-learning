<?php

require 'functions.php';

require 'Task.php';

require 'database/Connection.php';

require 'database/QueryBuilder.php';

$config = require 'config/database.php';

$message = require 'config/message.php';

$pdo = Connection::make($config,$message);

$query = new QueryBuilder($pdo);
$tasks = $query->all("todos");

require 'index.template.php';

//DRY: Don't repeat yourself -- El que s'ha de fer
//WET: WRITE EVERYTHING TWICE -- El que no s'ha de fer