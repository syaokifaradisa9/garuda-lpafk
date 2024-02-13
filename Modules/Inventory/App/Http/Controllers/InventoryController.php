<?php

namespace Modules\Inventory\App\Http\Controllers;

use Exception;
use App\Http\Controllers\Controller;
use Modules\Staffing\Services\UnitService;
use Modules\Inventory\Services\InventoryService;
use Modules\Inventory\App\DataTables\InventoryDataTable;
use Modules\Inventory\App\DataTransferObjects\InventoryDto;
use Modules\Inventory\App\Http\Requests\StoreInventoryRequest;

class InventoryController extends Controller
{
    private $service;
    private $unitService;
    public function __construct(
        UnitService $unitService,
        InventoryService $service,
    ){
        $this->service = $service;
        $this->unitService = $unitService;
    }

    public function index(InventoryDataTable $datatable){
        return $datatable->render('inventory::inventory.index');
    }

    public function create(){
        $units = $this->unitService->getAllUnit();
        return view('inventory::inventory.create', compact('units'));
    }

    public function store(StoreInventoryRequest $request){
        try{
            $inventoryDto = InventoryDto::fromAppRequest($request);
            $this->service->store($inventoryDto);

            return to_route('inventory.master.index')
                ->with('success', 'Sukses menambah inventaris');
        }catch(Exception $e){
            return back()
                    ->withInput()
                    ->with('error', $e->getMessage());
        }
    }

    public function edit($id){
        $inventory = $this->service->getById($id);
        $units = $this->unitService->getAllUnit();

        return view('inventory::inventory.create', compact('units', 'inventory'));
    }

    public function update(StoreInventoryRequest $request, $id){
        try{
            $this->service->verifyInventoryDataExistsById($id);

            $inventoryDto = InventoryDto::fromAppRequest($request);
            $this->service->update($id, $inventoryDto);

            return to_route('inventory.master.index')
                ->with('success', 'Sukses mengubah inventaris');
        }catch(Exception $e){
            return back()
                ->withInput()
                ->with('error', $e->getMessage());
        }
    }

    public function duplicate($id){
        $inventory = $this->service->getById($id);
        $units = $this->unitService->getAllUnit();

        return view('inventory::inventory.create', compact('units', 'inventory'));
    }

    public function delete($id){
        try{
            $this->service->verifyInventoryDataExistsById($id);
            $this->service->delete($id);
            return response()->json([
                'code' => 200,
                'status' => 'success',
                'message' =>'Sukses menghapus inventaris'
            ]);
        }catch(Exception $e){
            return response()->json([
                'code' => $e->getCode(),
                'status' => 'error',
                'message' => $e->getMessage(),
            ]);
        }
    }
}
