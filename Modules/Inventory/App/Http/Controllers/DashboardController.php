<?php

namespace Modules\Inventory\App\Http\Controllers;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        return view('inventory::dashboard.index');
    }
}
