<?php

namespace Modules\Staffing\App\Http\Controllers;

use App\Http\Controllers\Controller;

class UnitController extends Controller
{
    public function index(){
        return view('staffing::unit.index');
    }
}
