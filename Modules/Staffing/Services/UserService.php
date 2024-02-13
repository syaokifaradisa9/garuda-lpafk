<?php 

namespace Modules\Staffing\Services;

use App\Models\User;
use Exception;

class UserService{
    public function verifyUserDataExistsById($id){
        if(!User::where('id', $id)->exists()){
            throw new Exception('data pegawai tidak ada', 404);
        }
    }

    public function getUsersByUnitId($unitId){
        return User::whereUnitId($unitId)->get()->map(function($user){
            return [
                'id' => $user->id,
                'name' => $user->name,
            ];
        });
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

    public function delete($id){
        try{
            User::find($id)->delete();
        }catch(Exception $e){
            throw new Exception($e, 500);
        }
    }
}