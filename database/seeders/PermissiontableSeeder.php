<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Permission;

class PermissiontableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permission = [

            [
                'name' => 'CREATE_PRODUCT',
            ],
            [
                'name' => 'READ_PRODUCT',
            ],
            [
                'name' => 'EDIT_PRODUCT',
            ],
            [
                'name' => 'CREATE_POST',
            ],
            [
                'name' => 'READ_POST',
            ],
            [
                'name' => 'EDIT_POST',
            ],

        ];
        foreach ($permission as $key => $value) {
            Permission::create($value);
        }
    }
}
