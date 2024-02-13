<?php 

namespace Modules\Inventory\Services;

use Exception;
use Illuminate\Support\Facades\DB;
use Modules\Inventory\App\Models\Inventory;
use Modules\Inventory\App\Models\InventorySharing;

class InventoryService{
    public function verifyInventoryDataExistsById($id){
        return Inventory::where('id', $id)->exists();
    }

    public function getById($id){
        $inventory = Inventory::with('inventory_sharing')->find($id);

        return [
            'id'      => $inventory->id,
            'name'    => $inventory->name,
            'unit_id' => $inventory->unit_id,
            'type'    => $inventory->type,
            'owners'  => $inventory->inventory_sharing->pluck("user_id")->toArray()
        ];
    }

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

    public function update($id, $name, $unitId, $type, $owners){
        DB::beginTransaction();
        try{
            Inventory::find($id)->update([
                'name' => $name,
                'unit_id' => $unitId,
                'type' => $type,
            ]);

            InventorySharing::whereInventoryId($id)->delete();
            foreach($owners as $userId){
                InventorySharing::create([
                    'inventory_id' => $id,
                    'user_id' => $userId,
                ]);
            }

            DB::commit();
        }catch(Exception $e){
            DB::rollBack();
            throw new Exception('Terjadi kesalahan di sisi server!', 500);
        }
    }

    public function delete($id){
        DB::beginTransaction();
        try{
            InventorySharing::where('inventory_id', $id)->delete();
            Inventory::find($id)->delete();
            DB::commit();
        }catch(Exception $e){
            DB::rollBack();
            throw new Exception("Terjadi kesalahan di sisi server", 500);
        }
    }
}