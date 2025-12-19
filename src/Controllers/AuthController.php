<?php

namespace SPKPendakian\Controllers;

use Exception;
use SPKPendakian\Core\View;
use SPKPendakian\Models\AuthModels;
use SPKPendakian\Validations\AuthValidation;

class AuthController {
  public function loginPage(): void {
    View::render("/auth/login", [
      "title" => "Log in | SPK Pendakian Di Jawa Tengah"
    ]);
  }
  
  public function signupPage(): void {
    View::render("/auth/signup", [
      "title" => "Sign up | SPK Pendakian Di Jawa Tengah"
    ]);
  }
  
  public function signup(): void {
    $name = $_POST["name"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $hash_password = password_hash($password, PASSWORD_DEFAULT);
    
    try {
      AuthValidation::isUserExist($username);
      AuthModels::saveUser($name, $username, $hash_password);
      View::redirect("/login");
    } catch (Exception $err) {
      View::render("/auth/signup", [
        "title" => "Sign up | SPK Pendakian Di Jawa Tengah",
        "error" => $err->getMessage()
      ]);
    }
  }
  
  public function login(): void {
    $username = $_POST["username"];
    $password = $_POST["password"];

    try {
      AuthValidation::loginValidate(AuthModels::getUser($username), $password);
      echo "Login Berhasil!";
    } catch (Exception $err) {
      View::render("/auth/login", [
        "title" => "Log in | SPK Pendakian Di Jawa Tengah",
        "error" => $err->getMessage()
      ]);
    }
  }
}