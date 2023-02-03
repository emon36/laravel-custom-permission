<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class RoletableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = [

            [
                'name' => 'Admin',
            ],
            [
                'name' => 'Customer',
            ],
            [
                'name' => 'Seller',
            ]
        ];

        foreach ($role as $key => $value) {
            Role::create($value);
        }
    }
}
