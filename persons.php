<?php

require "bootstrap.php";

$tasks = $query->all("Persons");

require 'persons.template.php';