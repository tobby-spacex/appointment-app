<?php 

declare(strict_types = 1);

namespace App\Models;

use App\Model;
use PDO;

class User extends Model
{
    // Register New User
    public function register(array $userData) {

        $userName = $userData['name'];
        $email = $userData['email'];
        $password = password_hash($userData['password'], PASSWORD_DEFAULT);

        $stmt = $this->pdo->prepare(
            'INSERT INTO users (username, email, password)
             VALUES (?, ?, ?)'
        );

        $stmt->execute([$userName , $email, $password]);
    }

    // Sign In User
    public function signin(string $email): array|bool {
        $stmt = $this->pdo->prepare('SELECT * FROM users WHERE email LIKE ?');
        $stmt->execute([$email]);
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }
}