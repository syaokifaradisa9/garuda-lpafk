<?php 

namespace Modules\Staffing\Services;

use App\Models\User;
use Exception;

class UserService{
    public function store($name, $email, $phone, $nip, $unitId){
        try{
            User::create([
                'name' => $name,
                'email' => $email,
                'phone' => $phone,
                'nip' => $nip,
                'unit_id' => $unitId,
                'password' => bcrypt('lpfkbjb123'),
            ]);
        }catch(Exception $e){
            throw new Exception($e, 500);
        }
    }
}