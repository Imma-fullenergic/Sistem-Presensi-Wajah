<?php

namespace App\Http\Controllers\BK;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        return view('bk.dashboard');
    }
}

