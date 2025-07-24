<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // This method will return the dashboard view
        return view('dashboard.index');
    }

    // Add more methods for handling dashboard-related logic here
}
