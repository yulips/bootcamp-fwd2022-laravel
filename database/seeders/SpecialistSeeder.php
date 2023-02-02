<?php

namespace Database\Seeders;
use App\Models\MasterData\Specialist;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SpecialistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $specialist = [

            [
                'name' => 'Dermatology',
                'price' => '250000',
                'created_at' =>date('Y-m-d H-i-s'),
                'updated_at' =>date('Y-m-d H-i-s'),
            ],
            [
                'name' => 'Dentist',
                'price' => '150000',
                'created_at' =>date('Y-m-d H-i-s'),
                'updated_at' =>date('Y-m-d H-i-s'),
            ],
            [
                'name' => 'Endodontics',
                'price' => '450000',
                'created_at' =>date('Y-m-d H-i-s'),
                'updated_at' =>date('Y-m-d H-i-s'),
            ],
            [
                'name' => 'General Dentistry',
                'price' => '350000',
                'created_at' =>date('Y-m-d H-i-s'),
                'updated_at' =>date('Y-m-d H-i-s'),
            ],
            [
                'name' => 'Oral and Maxiliofacial Surgery',
                'price' => '750000',
                'created_at' =>date('Y-m-d H-i-s'),
                'updated_at' =>date('Y-m-d H-i-s'),
            ],
            [
                'name' => 'Orthodontics',
                'price' => '550000',
                'created_at' =>date('Y-m-d H-i-s'),
                'updated_at' =>date('Y-m-d H-i-s'),
            ],
            [
                'name' => 'Pedistric Dentistry',
                'price' => '175000',
                'created_at' =>date('Y-m-d H-i-s'),
                'updated_at' =>date('Y-m-d H-i-s'),
            ],
            [
                'name' => 'Periodontics',
                'price' => '255000',
                'created_at' =>date('Y-m-d H-i-s'),
                'updated_at' =>date('Y-m-d H-i-s'),
            ],
            [
                'name' => 'Prosthodentics',
                'price' => '275000',
                'created_at' =>date('Y-m-d H-i-s'),
                'updated_at' =>date('Y-m-d H-i-s'),
            ],
            [
                'name' => 'Radiology',
                'price' => '1250000',
                'created_at' =>date('Y-m-d H-i-s'),
                'updated_at' =>date('Y-m-d H-i-s'),
            ],
            [
                'name' => 'Surgery',
                'price' => '75000',
                'created_at' =>date('Y-m-d H-i-s'),
                'updated_at' =>date('Y-m-d H-i-s'),
            ],
            [
                'name' => 'Urology',
                'price' => '950000',
                'created_at' =>date('Y-m-d H-i-s'),
                'updated_at' =>date('Y-m-d H-i-s'),
            ]
        ];

        Specialist::insert($specialist);
    }
}
