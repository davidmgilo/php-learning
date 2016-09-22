<?php

$tasks = $query->all("todos");

require 'views/tasks.template.php';