<?php
namespace Src;

use PDO;
use PDOException;

class Database {
  private static $instance = null;
  private $pdo;

  private function __construct($config) {
    $dsn = "mysql:host={$config['db_host']};dbname={$config['db_name']};charset={$config['charset']}";
    $this->pdo = new PDO($dsn, $config['db_user'], $config['db_pass'], [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]);
  }

  public static function getInstance() {
    if (self::$instance === null) {
      $config = require DIR . '/../config.php';
      self::$instance = new Database($config);
    }
    return self::$instance->pdo;
  }
}