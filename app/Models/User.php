<?php 

declare(strict_types = 1);

namespace App\Models;

use App\Model;

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

        return header('Location: /'); 
    }
}