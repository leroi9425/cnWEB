<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class B3TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('it_centers')->insert([
            'id' => 401,
            'name' => 'Trung tâm Tin học ABC',
            'location' => '456 Đường Y, TP.HCM',
            'contact_email' => 'contact@abc.com'
        ]);

        DB::table('hardware_devices')->insert([
            'id' => 3001,
            'device_name' => 'Logitech G502',
            'type' => 'Keyboard',
            'status' => true,
            'center_id' => 401
        ]);
    }
}
