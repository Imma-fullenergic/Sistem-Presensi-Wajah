<?php

namespace App\Http\Controllers\Wali;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        return view('wali.dashboard');
    }
}

