<?php

namespace Modules\Staffing\Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class StaffingDatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Permission::create(['name' => "Create Staff"]);
        Permission::create(['name' => "Update Staff"]);
        Permission::create(['name' => "Delete Staff"]);
        Permission::create(['name' => "Export Staff"]);

        $superadmin = Role::create(['name' => "Superadmin_Staffing"]);
        
        $superadmin->givePermissionTo('Create Staff');
        $superadmin->givePermissionTo('Update Staff');
        $superadmin->givePermissionTo('Delete Staff');
        $superadmin->givePermissionTo('Export Staff');

        $users = [
            [
                'email' => 'syaokifaradisa09@gmail.com',
                'role' => 'Superadmin_Staffing',
            ]
        ];

        foreach($users as $user){
            User::whereEmail($user['email'])->first()->syncRoles($user['role']);
        }
    }
}
