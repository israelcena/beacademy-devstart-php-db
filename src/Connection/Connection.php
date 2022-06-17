<?php

declare(strict_types=1);

namespace App\Connection;

use PDO;

abstract class Connection
{
  public static function getConnetion(): PDO
  {
    $dbInfo = [
      'host' => '10.0.10.154',
      'port' => '8003',
      'dbname' => 'db_store',
      'username' => 'root',
      'password' => 'root'
    ];

    return new PDO("mysql:host={$dbInfo['host']};port={$dbInfo['port']};dbname={$dbInfo['dbname']}", $dbInfo['username'], $dbInfo['password']);
  }
};
