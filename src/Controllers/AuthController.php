<?php

namespace SPKPendakian\Controllers;

use Exception;
use SPKPendakian\Core\View;
use SPKPendakian\Models\UserModel;
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
      UserModel::saveUser($name, $username, $hash_password);
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
      $userRes = UserModel::getUserByUsername($username);
      $userData = $userRes->fetch();

      AuthValidation::isUsernameValid($userRes);
      AuthValidation::isPasswordValid($password, $userData["password"]);

      session_start();

      $_SESSION["auth"] = [
        "login" => true,
        "username" => $userData["username"]
      ];

      View::redirect("/");
    } catch (Exception $err) {
      View::render("/auth/login", [
        "title" => "Log in | SPK Pendakian Di Jawa Tengah",
        "error" => $err->getMessage()
      ]);
    }
  }

  public function logout(): void {
    session_start();
    session_destroy();
    session_unset();
    VIew::redirect("/");
  }
}