<?php
$app = [];
require 'functions.php';
require 'core/database/Connection.php';
require 'core/database/QueryBuilder.php';
require 'Task.php';
require 'core/Router.php';
require 'core/Request.php';

$app['config'] = require 'config.php';
return new QueryBuilder(
    Connection::make($app['config']['database'])
);
