<?php

$tasks = $query->all("todos");

require __DIR__.'/../views/tasks.template.php';