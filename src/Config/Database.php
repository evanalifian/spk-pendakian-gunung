<?php

namespace SPKPendakian\Config;

class Database {
  const DB_CONN = "mysql:host=localhost:3306;dbname=project_si";
  const DB_USERNAME = "root";
  const DB_PASSWORD = "";

  public static function getConnection(): \PDO {
    return new \PDO(self::DB_CONN, self::DB_USERNAME, self::DB_PASSWORD);
  }
}