<?php

require 'functions.php';

require 'Task.php';

require 'database/Connection.php';

// PDO: PHP Data Objects library/biblioteca
// Permet agafar dades de la bbdd i mapejar-les.

//$connection = new Connection();
//$pdo = $connection->make();
// Equivalent
$pdo = Connection::make();
//Amb un mètode estàtic no és necessari un new

$pdo = connectDb();

$tasks = allTasks($pdo);

require 'index.template.php';