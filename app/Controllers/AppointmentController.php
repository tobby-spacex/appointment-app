<?php

namespace App\Controllers;

use App\View;

class AppointmentController
{
    public function index(): View
    {
        return View::make('components/calendar');
    }
}