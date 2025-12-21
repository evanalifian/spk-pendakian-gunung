<?php

namespace SPKPendakian\Middlewares;

use SPKPendakian\Core\View;
use SPKPendakian\Middlewares\Middleware;

class NotAuthMiddleware implements Middleware {
  public function before(): void {
    session_start();
    if(!isset($_SESSION["auth"])) {
      View::redirect("/login");
    } 
  }
}