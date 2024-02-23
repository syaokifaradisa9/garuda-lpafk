<?php

namespace Modules\Archieve\App\Http\Controllers;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index(){
        return view('archieve::dashboard.index');
    }
}
