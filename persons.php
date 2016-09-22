<?php

require "core/bootstrap.php";

$tasks = $query->all("Persons");

require 'persons.template.php';