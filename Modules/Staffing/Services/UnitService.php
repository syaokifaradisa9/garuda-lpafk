<?php 

namespace Modules\Staffing\Services;

use App\Models\Unit;
use Exception;

class UnitService{
    public function store($name){
        try{
            Unit::create([
                'name' => $name,
            ]);
        }catch(Exception $e){
            throw new Exception($e, 500);
        }
    }
}