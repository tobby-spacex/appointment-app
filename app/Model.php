<?php

declare(strict_types = 1);

namespace App;

use App\Database;

abstract class Model
{
    protected $pdo;

    public function __construct()
    {
        $this->pdo = Database::connection();
    }
}
