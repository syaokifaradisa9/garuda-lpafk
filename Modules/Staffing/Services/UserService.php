<?php 

namespace Modules\Staffing\Services;

use App\Models\User;
use Exception;

class UserService{
    public function verifyUnitDataExistsById($id){
        if(!User::where('id', $id)->exists()){
            throw new Exception('data pegawai tidak ada', 404);
        }
    }

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

    public function update($id, $name, $email, $phone, $nip, $unitId){
        try{
            User::find($id)->update([
                'name' => $name,
                'email' => $email,
                'phone' => $phone,
                'nip' => $nip,
                'unit_id' => $unitId,
            ]);
        }catch(Exception $e){
            throw new Exception($e, 500);
        }
    }
}