<?php

namespace Modules\Staffing\App\Http\Controllers;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{

    public function index()
    {
        return view('staffing::dashboard.index');
    }
}
