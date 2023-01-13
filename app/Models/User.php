<?php 

namespace App\Models;

use App\Database;

class User 
{
    private $pdo;

    public function __construct()
    {
        $this->pdo = Database::connection();
    }

    // Register New User
    public function register() {
        var_dump($this->pdo);
    }
}