<?php
$tasks = $query->selectAll('tasks', 'Task');
require 'views/index.view.php';
