<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class B2TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('renters')->insert([
            'id' => 201,
            'name' => 'Nguyễn Văn A',
            'phone_number' => '0987654321',
            'email' => 'nva@gmail.com'
        ]);

        DB::table('laptops')->insert([
            'id' =>  1001,
            'brand' => 'Dell',
            'model' => 'Inspiron 15 3000',
            'specifications' => 'i5, 8GB RAM, 256GB SSD',
            'rental_status' => true,
            'renter_id' => 201
        ]);
    }
}
