<?php

namespace Modules\Staffing\App\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\Staffing\Services\UserService;
use Modules\Staffing\App\DataTables\UserDataTable;

class UserController extends Controller
{
    private $service;
    public function __construct(UserService $service) 
    {
        $this->service = $service;
    }

    public function index(UserDataTable $datatable){
        return $datatable->render('staffing::user.index');
    }
}
