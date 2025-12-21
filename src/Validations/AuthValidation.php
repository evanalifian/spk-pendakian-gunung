<?php

namespace SPKPendakian\Validations;

use SPKPendakian\Models\UserModel;

class AuthValidation {
  public static function isUserExist(string $username): void {
    $user = UserModel::getUserByUsername($username);
    $exist = false;

    foreach ($user as $u) {
      $exist = true;
    }

    if ($exist) {
      throw new \Exception("Username sudah tersedia!");
    }
  }

  public static function isUsernameValid(\PDOStatement $user): void {
    if ($user->rowCount() < 1) {
      throw new \Exception("Username tidak ditemukan!");
    }
  }

  public static function isPasswordValid(string $password, string $hash_password): void {
    if (!password_verify($password, $hash_password)) {
      throw new \Exception("Password tidak valid!");
    }
  }
}