<?php

namespace App\Http\Controllers\Ortu;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        return view('ortu.dashboard');
    }
}

