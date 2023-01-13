<?php

namespace App\Controllers;

use App\View;
use App\Models\User;

class AuthController
{
    // Show Sign Up From
    public function signUp(): View
    {
        return View::make('user/sign.up');
    }

    // Show LogIn From
    public function logIn(): View
    {
        return View::make('user/login');
    }

    // Register New User
    public function register() {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name  =  $_POST['name'];
            $email =  $_POST['email'];
            $password =  $_POST['password'];
            $password_confirm = $_POST['password_confirm'];

            if(empty($name) || empty($email) || empty($password) || empty($password_confirm)) {
                $error_message = 'empty';
            } elseif($password != $password_confirm) {
                $error_message = 'password must match';
            } else {
                $user = new User();
                
                $userData = array(
                    'name' => $name,
                    'email' => $email, 
                    'password' => $password
                );

                $user->register($userData);
            }
        }
 
    }
}
