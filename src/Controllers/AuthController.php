<?php

namespace SPKPendakian\Controllers;

use SPKPendakian\Core\View;

class AuthController {
  public function loginPage() {
    View::render("/auth/login", [
      "title" => "Log in | SPK Pendakian Di Jawa Tengah"
    ]);
  }

  public function signupPage() {
    View::render("/auth/signup", [
      "title" => "Sign up | SPK Pendakian Di Jawa Tengah"
    ]);
  }
}