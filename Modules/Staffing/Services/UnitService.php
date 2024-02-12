<?php 

namespace Modules\Staffing\Services;

use App\Models\Unit;
use Exception;

class UnitService{
    public function verifyUnitDataExistsById($id){
        if(!Unit::where('id', $id)->exists()){
            throw new Exception('data unit tidak ada', 404);
        }
    }

    public function store($name){
        try{
            Unit::create([
                'name' => $name,
            ]);
        }catch(Exception $e){
            throw new Exception($e, 500);
        }
    }

    public function update($id, $name){
        try{
            Unit::find($id)->update([
                'name' => $name,
            ]);
        }catch(Exception $e){
            throw new Exception($e, 500);
        }
    }
}