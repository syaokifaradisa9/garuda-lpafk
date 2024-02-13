<?php 

namespace Modules\Inventory\Services;

use Exception;
use Illuminate\Support\Facades\DB;
use Modules\Inventory\App\Models\Inventory;
use Modules\Inventory\App\Models\InventorySharing;

class InventoryService{
    public function store($name, $unitId, $type, $owners){
        DB::beginTransaction();
        try{
            $inventory = Inventory::create([
                'name' => $name,
                'unit_id' => $unitId,
                'type' => $type,
            ]);

            foreach($owners as $userId){
                InventorySharing::create([
                    'inventory_id' => $inventory->id,
                    'user_id' => $userId,
                ]);
            }

            DB::commit();
        }catch(Exception $e){
            DB::rollBack();
            throw new Exception('Terjadi kesalahan di sisi server!', 500);
        }
    }
}