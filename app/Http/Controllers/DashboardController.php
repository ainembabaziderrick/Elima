<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function Dashboard(){
        return view('admin.dashboard.list');
    }

    public function ClimbersDashboard(){
        return view('climbers.dashboard.list');
    }

    public function ClientsDashboard(){
        return view('clients.dashboard.list');
    }
}
