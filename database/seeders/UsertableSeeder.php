<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsertableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'role_id' => '1',
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'password' => bcrypt('pass@admin'),
            ],
            [
                'role_id' => '2',
                'name' => 'User',
                'email' => 'user@gmail.com',
                'password' => bcrypt('pass@user'),
            ],
            [
                'role_id' => '3',
                'name' => 'Seller',
                'email' => 'seller@gmail.com',
                'password' => bcrypt('pass@seller'),
            ]
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }

}
