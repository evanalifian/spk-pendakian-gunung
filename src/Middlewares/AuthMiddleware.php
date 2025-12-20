<?php

namespace SPKPendakian\Middlewares;

use SPKPendakian\Middlewares\MIddleware;

class AuthMiddleware implements MIddleware {
  public function before(): void {
    session_start();

    if (!isset($_SESSION["login"])) {
      header("Location: /login");
      exit;
    } else {
      header("Location: /");
      exit;
    }
  }
}