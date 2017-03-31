<?php

require 'boostrap.php';

$config = require 'config.php';

$pdo = Connection::make($config['database']);
$query = new Query($pdo);

$issues = $query->getAllData('issues');

require 'index.view.php';