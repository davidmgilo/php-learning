<?php

require 'functions.php';

require 'Task.php';

require 'database/Connection.php';

require 'database/QueryBuilder.php';

$config = [
    'dbtype' => 'mysql',
    'dbname' => 'prova',
    'username' => 'root',
    'password' => '',
    'dbhost' => '127.0.0.1'
];

$pdo = Connection::make($config);

$query = new QueryBuilder($pdo);
$tasks = $query->all("todos");

require 'index.template.php';