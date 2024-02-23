<?php

namespace Modules\Archieve\Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Modules\Archieve\Enums\ArchieveUserRole;
use Modules\Archieve\Enums\ArchieveUserPermission;
use Modules\Archieve\Database\Seeders\ClassificationCodeSeeder;
use Modules\Archieve\Database\Seeders\SpecificClassificationCodeSeeder;

class ArchieveDatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Define Roles
        foreach([
            ArchieveUserRole::AdminSurat,
        ] as $role){
            Role::create(['name' => $role]);
        }

        // Define Permission
        foreach([
            ArchieveUserPermission::ClassificationCodeManagement,
        ] as $permission){
            Permission::create(['name' => $permission]);
        }

        // Assign Role Permission in Admin Surat
        $role = Role::whereName(ArchieveUserRole::AdminSurat)->first();
        $role->syncPermissions([
            ArchieveUserPermission::ClassificationCodeManagement
        ]);

        // Assign Role to User
        User::whereEmail('dessy.kps@gmail.com')->first()->assignRole(ArchieveUserRole::AdminSurat);

        // Call Seeder
        $this->call([
            ClassificationCodeSeeder::class,
            SubClassificationCodeSeeder::class,
            SpecificClassificationCodeSeeder::class
        ]);
    }
}
