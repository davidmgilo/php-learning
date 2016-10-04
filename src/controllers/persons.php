<?php

$tasks = $query->all("Persons");

require __DIR__.'/../views/persons.template.php';