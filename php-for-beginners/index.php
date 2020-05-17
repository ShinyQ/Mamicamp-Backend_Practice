<?php
require 'basic.php';
require 'model/Task.php';
$query = require 'database/boot.php';

$tasks = $query->selectAll('todos', 'Task');

require 'index.view.php';