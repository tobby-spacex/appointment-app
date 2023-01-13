<?php

namespace App;

use PDO;

class Database
{
    public static function connection()
    {
        try {
            $conn = new PDO("mysql:host=" . $_ENV['DB_HOST'] . ";dbname=" .  $_ENV['DB_DATABASE'], $_ENV['DB_USER'], $_ENV['DB_PASS']);
            return $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          } catch(\PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
          }
    }
}
