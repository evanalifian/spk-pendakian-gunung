<?php

namespace SPKPendakian\Validations;

use SPKPendakian\Models\AuthModels;

class AuthValidation {
  public static function isUserExist(string $username): void {
    $user = AuthModels::getUser($username);
    $exist = false;

    foreach ($user as $u) {
      $exist = true;
    }

    if ($exist) {
      throw new \Exception("Username sudah tersedia!");
    }
  }
  
  public static function loginValidate(\PDOStatement $user, string $password): void {
    $row = $user->rowCount();
    $user = $user->fetch();

    if ($row < 1) {
      throw new \Exception("Username tidak ditemukan!");
    } elseif (!password_verify($password, $user["password"])) {
      throw new \Exception("Password tidak valid!");
    }
  }
}