<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $users = [
            [
                'name' => "Muhammad Syaoki Faradisa",
                'phone' => '',
                'nip' => "",
                'email' => 'syaokifaradisa09@gmail.com',
                'unit_id' => 1,
            ],
            [
                'name' => "Desy Fajrianti Ramadhaniah",
                'phone' => '',
                'nip' => "",
                'email' => 'dessy.kps@gmail.com',
                'unit_id' => 1,
            ]
        ];

        foreach($users as $user){
            User::create([
                'name' => $user['name'],
                'phone' => $user['phone'],
                'email' => $user['email'],
                'nip' => $user['nip'],
                'unit_id' => $user['unit_id'],
                'password' => bcrypt('lpfkbjb123'),
            ]);
        }
    }
}
