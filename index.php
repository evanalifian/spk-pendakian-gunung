<?php

require_once __DIR__ . "/vendor/autoload.php";

use SPKPendakian\Controllers\AuthController;
use SPKPendakian\Core\Router;
use SPKPendakian\Controllers\HomeController;

Router::get("/", HomeController::class, "index");
Router::get("/dokumentasi", HomeController::class, "docs");
Router::get("/dokumentasi/reference_journal.pdf", HomeController::class, "getJournal");
Router::get("/login", AuthController::class, "loginPage");
Router::post("/login", AuthController::class, "login");
Router::get("/signup", AuthController::class, "signupPage");
Router::post("/signup", AuthController::class, "signup");

Router::run();