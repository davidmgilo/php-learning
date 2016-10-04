<?php

require __DIR__ . "/../../vendor/autoload.php";

use Davidmgilo\Myframework\core\database\QueryBuilder;
use Davidmgilo\Myframework\core\database\Connection;
use Davidmgilo\Myframework\core\models\Person;
use Davidmgilo\Myframework\core\models\Task;


$config = require 'config/database.php';

$message = require 'config/message.php';

$pdo = Connection::make($config,$message);

$query = new QueryBuilder($pdo);