<?php

require 'functions.php';

require 'Task.php';

// PDO: PHP Data Objects library/biblioteca
// Permet agafar dades de la bbdd i mapejar-les.

$pdo = connectDb();

$tasks = allTasks($pdo);

require 'index.template.php';