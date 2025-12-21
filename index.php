<?php

require_once __DIR__ . "/vendor/autoload.php";

use SPKPendakian\Core\Router;
use SPKPendakian\Controllers\HomeController;
use SPKPendakian\Controllers\AuthController;
use SPKPendakian\Middlewares\AuthMiddleware;
use SPKPendakian\Middlewares\NotAuthMiddleware;

Router::get("/", HomeController::class, "index", [NotAuthMiddleware::class]);
Router::get("/dokumentasi", HomeController::class, "docs", [NotAuthMiddleware::class]);
Router::get("/dokumentasi/reference_journal.pdf", HomeController::class, "getJournal", [NotAuthMiddleware::class]);

Router::get("/login", AuthController::class, "loginPage", [AuthMiddleware::class]);
Router::post("/login", AuthController::class, "login", [AuthMiddleware::class]);
Router::get("/signup", AuthController::class, "signupPage", [AuthMiddleware::class]);
Router::post("/signup", AuthController::class, "signup", [AuthMiddleware::class]);
Router::get("/logout", AuthController::class, "logout", [NotAuthMiddleware::class]);

Router::run();