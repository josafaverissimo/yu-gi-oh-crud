<?php

require_once "Source/autoload.php";

use Source\Core\Routes;

$request = str_replace(CONF_BASE_REQUEST_URI, "/", $_SERVER['REQUEST_URI']);

$routes = new Routes();

$routes->route($request);
