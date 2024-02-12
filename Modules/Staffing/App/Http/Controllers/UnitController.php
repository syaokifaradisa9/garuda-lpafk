<?php

namespace Modules\Staffing\App\Http\Controllers;

use Exception;
use App\Http\Controllers\Controller;
use Modules\Staffing\Services\UnitService;
use Modules\Staffing\App\Http\Requests\Unit\StoreUnitRequest;

class UnitController extends Controller
{
    private $service;
    public function __construct(UnitService $service)
    {
        $this->service = $service;
    }

    public function index(){
        return view('staffing::unit.index');
    }

    public function create(){
        return view('staffing::unit.create');
    }

    public function store(StoreUnitRequest $request){
        try{
            $this->service->store($request->name);

            return to_route('staffing.unit.index')
                ->with('success', 'berhasil menambahkan unit');
        }catch(Exception $e){

        }
    }
}
