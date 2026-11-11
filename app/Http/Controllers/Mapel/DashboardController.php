<?php

namespace App\Http\Controllers\Mapel;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        return view('mapel.dashboard');
    }
}

