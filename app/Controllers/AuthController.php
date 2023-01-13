<?php

namespace App\Controllers;

use App\View;
use App\Models\User;
use App\Models\User\User as UserUser;

class AuthController
{
    public function signUp(): View
    {
        return View::make('user/sign.up');
    }

    public function logIn(): View
    {
        return View::make('user/login');
    }
}
