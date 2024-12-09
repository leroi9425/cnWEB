<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Prac3TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('computers')->insert([
            'computer_name' => 'Legion',
            'model' => 'Dell Optiplex 700',
            'operating_system' => 'Window 10',
            'processor' => 'Intel i7',
            'memory' => 8,
            'available' => true
        ]);

        DB::table('issues')->insert([
            'computer_id' => 1,
            'reported_by' => 'Nguyen Van A',
            'reported_date' => now(),
            'description' => 'Glitch in chip',
            'urgency' => 'Low',
            'status' => 'Open',
        ]);
    }
}
