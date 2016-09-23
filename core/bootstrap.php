<?php

require 'functions.php';

require 'models/Task.php';

require 'models/Person.php';

require 'database/Connection.php';

require 'database/QueryBuilder.php';

$config = require 'config/database.php';

$message = require 'config/message.php';

$pdo = Connection::make($config,$message);

$query = new QueryBuilder($pdo);