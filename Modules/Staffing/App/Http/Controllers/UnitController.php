<?php

namespace Modules\Staffing\App\Http\Controllers;

use Exception;
use App\Models\Unit;
use App\Http\Controllers\Controller;
use Modules\Staffing\App\DataTables\UnitDataTable;
use Modules\Staffing\Services\UnitService;
use Modules\Staffing\App\Http\Requests\Unit\StoreUnitRequest;
use Modules\Staffing\App\Http\Requests\Unit\UpdateUnitRequest;

class UnitController extends Controller
{
    private $service;
    public function __construct(UnitService $service) 
    {
        $this->service = $service;
    }

    public function index(UnitDataTable $datatable){
        return $datatable->render('staffing::unit.index');
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
            return back()
                    ->withInput()
                    ->with('error', $e->getMessage());
        }
    }

    public function edit($id){
        return view('staffing::unit.create', [
            'unit' => Unit::find($id),
        ]);
    }

    public function update(UpdateUnitRequest $request, $id){
        try{
            $this->service->verifyUnitDataExistsById($id);
            $this->service->update(
                $id,
                $request->name
            );

            return to_route('staffing.unit.index')
                ->with('success', 'berhasil mengupdate unit');
        }catch(Exception $e){
            return back()
                    ->withInput()
                    ->with('error', $e->getMessage());
        }
    }
}
