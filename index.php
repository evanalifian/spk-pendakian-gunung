<?php

require_once __DIR__ . "/vendor/autoload.php";

use SPKPendakian\Core\Router;
use SPKPendakian\Controllers\HomeController;

$router = new Router();

$router->get("/", HomeController::class, "index");

$router->run();