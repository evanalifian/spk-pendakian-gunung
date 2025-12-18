<?php

namespace SPKPendakian\Models;

use SPKPendakian\Config\Database;

class HomeModels {
  public static function connection(): \PDO {
    return Database::getConnection();
  }

  public static function getCriteria(): \PDOStatement {
    $sql = <<<SQL
      SELECT * FROM criteria;
    SQL;
    $res = self::connection()->query($sql);

    return $res;
  }

  public static function getAlternative(): \PDOStatement {
    $sql = <<<SQL
      SELECT * FROM alternative;
    SQL;
    $res = self::connection()->query($sql);

    return $res;
  }
}