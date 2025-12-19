<?php

require_once __DIR__ . "/vendor/autoload.php";

use SPKPendakian\Controllers\RankingController;
use SPKPendakian\Core\Router;
use SPKPendakian\Controllers\HomeController;

Router::get("/", HomeController::class, "index");
Router::get("/dokumentasi", HomeController::class, "docs");
Router::get("/dokumentasi/reference_journal.pdf", HomeController::class, "getJournal");
Router::get("/perangkingan", RankingController::class, "index");

Router::run();