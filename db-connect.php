<?php
class DBConnector {
  private static $db;

  public static function dbConnection() {
    // If the static holder for the db connection isn't set, try to actually
    // establish the connection first.
    if (!isset(self::$db)) {
      $dsn = getenv('MYSQL_DSN');
      $user = getenv('MYSQL_USER');
      $password = getenv('MYSQL_PASSWORD');
      
      if (!isset($dsn, $user) || false === $password) {
        throw new Exception('Set MYSQL_DSN, MYSQL_USER, and MYSQL_PASSWORD environment variables');
      } 

      self::$db = new PDO($dsn, $user, $password);
    }

    // If it still isn't set, this means we couldn't connect, for some reason.
    if (!isset(self::$db)) {
      throw new Exception('Cannot establish connection to the database');
    }

    // This is the success case: return the connection.
    return self::$db;
  }

}
