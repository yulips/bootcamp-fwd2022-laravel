<?php

namespace Database\Seeders;
use App\Models\MasterData\TypeUser;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $type_user = [
            [
                'name' => 'Admin',
                'created_at' => date('Y-m-d H-i-s'),
                'updated_at' => date('Y-m-d H-i-s'),
            ],
            [
                'name' => 'Doctor',
                'created_at' => date('Y-m-d H-i-s'),
                'updated_at' => date('Y-m-d H-i-s'),
            ],
            [
                'name' => 'Pasien',
                'created_at' => date('Y-m-d H-i-s'),
                'updated_at' => date('Y-m-d H-i-s'),
            ]
            ];

        TypeUser::insert($type_user);
    }
}
