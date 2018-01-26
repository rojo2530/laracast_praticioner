<?php
define('DIRECTORY', 'laracast_praticioner/Parte19_Forms_Request_Types_and_Routing');
$router->define([
    'laracast_praticioner/Parte19_Forms_Request_Types_and_Routing' => 'controllers/index.php',
    'laracast_praticioner/Parte19_Forms_Request_Types_and_Routing/contact' => 'controllers/contact.php',
    'laracast_praticioner/Parte19_Forms_Request_Types_and_Routing/about' => 'controllers/about.php',
    'laracast_praticioner/Parte19_Forms_Request_Types_and_Routing/names' => 'controllers/add-name.php',
]);