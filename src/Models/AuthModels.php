<?php

namespace SPKPendakian\Models;

use SPKPendakian\Config\Database;

class AuthModels {
  public static function saveUser(string $name, string $username, string $password): void {
    $sql = <<<SQL
      INSERT INTO users (user_name, user_username, user_password)
      VALUE (:name, :username, :password);
    SQL;
    $res = Database::getConnection()->prepare($sql);
    
    $res->bindParam("name", $name);
    $res->bindParam("username", $username);
    $res->bindParam("password", $password);
    $res->execute();
  }
  
  public static function getUser(string $username): \PDOStatement {
    $sql = <<<SQL
      SELECT
      user_id AS id,
      user_name AS name,
      user_username AS username,
      user_password AS password
      FROM users
      WHERE user_username = :username;
    SQL;
    $res = Database::getConnection()->prepare($sql);
    
    $res->bindParam("username", $username);
    $res->execute();

    return $res;
  }
}