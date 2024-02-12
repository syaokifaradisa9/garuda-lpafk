<?php

namespace Modules\Staffing\App\Http\Controllers;

use Exception;
use App\Models\Unit;
use App\Http\Controllers\Controller;
use Modules\Staffing\Services\UnitService;
use Modules\Staffing\Services\UserService;
use Modules\Staffing\App\DataTables\UserDataTable;
use Modules\Staffing\App\Http\Requests\User\StoreUserRequest;

class UserController extends Controller
{
    private $service;
    private $unitService;
    public function __construct(
        UnitService $unitService,
        UserService $service
    ){
        $this->service = $service;
        $this->unitService = $unitService;
    }

    public function index(UserDataTable $datatable){
        return $datatable->render('staffing::user.index');
    }

    public function create(){
        $units = $this->unitService->getAllUnit();
        return view('staffing::user.create', compact('units'));
    }

    public function store(StoreUserRequest $request){
        try{
            $this->service->store(
                $request->name,
                $request->email,
                $request->phone,
                $request->nip,
                $request->unit_id,
            );

            return to_route('staffing.user.index')
                ->with('success', 'berhasil menambahkan pegawai');
        }catch(Exception $e){
            return back()
                    ->withInput()
                    ->with('error', $e->getMessage());
        }
    }
}
