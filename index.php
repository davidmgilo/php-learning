<?php

require 'functions.php';

require 'Task.php';

require 'database/Connection.php';

require 'database/QueryBuilder.php';

$config = require 'config/database.php';

$pdo = Connection::make($config);

$query = new QueryBuilder($pdo);
$tasks = $query->all("todos");

require 'index.template.php';