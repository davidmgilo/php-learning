<?php

require "core/bootstrap.php";

$tasks = $query->all("todos");

require 'index.template.php';

//DRY: Don't repeat yourself -- El que s'ha de fer
//WET: WRITE EVERYTHING TWICE -- El que no s'ha de fer