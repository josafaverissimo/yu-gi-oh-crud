<?php

require_once "Source/autoload.php";

use Source\Core\Routes;

$routes = new Routes();

$routes->route("/", CONF_DEFAULT_CONTROLLER);

$routes->route("/card", "Card:index");
$routes->route("/card/form", "Card:form");
$routes->route("/card/create", "Card:create");

$routes->dispatch();
