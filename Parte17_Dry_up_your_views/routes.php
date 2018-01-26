<?php
define('DIRECTORY', 'laracast');
$router->define([
    'laracast' => 'controllers/index.php',
    'laracast/contact' => 'controllers/contact.php',
    'laracast/about' => 'controllers/about.php'
]);